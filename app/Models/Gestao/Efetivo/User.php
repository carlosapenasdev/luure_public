<?php

namespace App\Models\Gestao\Efetivo;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\CustomResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

use App\Models\Management\Role;
use App\Models\Gestao\Efetivo\Escolaridade;
use App\Models\Gestao\Efetivo\PostoGraduacao;
use App\Models\Gestao\Efetivo\AreaFormacao;
use App\Models\Protocolo\Protocolo;
use App\Models\Gestao\Agencia\Agencia;

class User extends Authenticatable
{
	use Notifiable, HasRolesAndPermissions, SoftDeletes, \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'agencia_id',
    	'antiguidade',
    	'posto_graduacao_id',
    	'escolaridade_id',
    	'area_formacao_id',
    	'nome_guerra',
    	'nome_completo',
    	'rg',
    	'cpf',
    	'titulo_eleitor',
    	'endereco',
    	'bairro',
    	'cidade',
    	'fone_celular',
    	'fone_residencial',
    	'fone_recado',
    	'email_secundario',
    	'arma_01_modelo',
    	'arma_01_serie',
    	'arma_01_patrimonio',
    	'arma_02_modelo',
    	'arma_02_serie',
    	'arma_02_patrimonio',
    	'ciai',
    	'ciclo_ano',
    	'operacoes_inteligencia',
    	'operacoes_local_ano',
    	'mpc',
    	'mpc_local_ano',
    	'sem_nivelamento',
    	'data_ingresso',
    	'data_saida',
    	'status',

    	'email',
    	'password',
    	'email_verified_at',
    ];


    protected $dates = [
    	'data_ingresso'
    	,'data_saida'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    	'email_verified_at' => 'datetime',
    ];

    protected static $logFillable 		= true;
    protected static $logOnlyDirty 		= true;
    protected static $submitEmptyLogs 	= false;
    protected static $logName 			= 'management';

    protected $appends = ['name'];

    public function getNameAttribute()
    {
    	return $this->posto_graduacao->name.' '.$this->nome_guerra;
    }

	/**
    * @param $permission
    * @return bool
    */
	protected function hasPermission($permission)
	{
		return (bool) $this->permissions->where('slug', $permission->slug)->count();
	}

    /**
    * @param $permission
    * @return bool
    */
    protected function hasPermissionTo($permission)
    {
    	return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
    	$this->notify(new CustomResetPasswordNotification($token));
    }

    public static function getUsersToProtocolInChefia()
    {
    	$agencia = auth()->user()->agencia_id;
    	$users = self::where('agencia_id', $agencia)->get()->filter(function($user)
    	{
    		if($user->hasRole('root') ||
    		   $user->hasRole('sysadmin') ||
    		   
    		   $user->hasRole('chefe-subsecao') ||
    		   $user->hasRole('chefe-regional') ||
    		   $user->hasRole('chefe-local') ||
    		   
    		   $user->hasRole('adjunto') ||
    		   
    		   $user->hasRole('analista-subsecao') ||
    		   $user->hasRole('analista-regional') ||
    		   $user->hasRole('analista-local')
    		)

    			return $user;
    	});
    	
    	return $users;
    }

    public static function getUsersToProtocolInAnalista($onlyElo = false)
    {
    	$agencia = auth()->user()->agencia_id;
    	
    	if($onlyElo == false)
    	{
    		$users = self::where('agencia_id', $agencia)->get()->filter(function($user)
    		{
    			if($user->hasRole('root') || $user->hasRole('sysadmin') || $user->hasRole('chefe-subsecao') || $user->hasRole('chefe-regional') || $user->hasRole('chefe-local') || $user->hasRole('elo'))
    				return $user;
    		});
    	}
    	else
    	{
    		$users = self::where('agencia_id', $agencia)->get()->filter(function($user)
    		{
    			if($user->hasRole('root') || $user->hasRole('elo'))
    				return $user;
    		});
    	}

    	return $users;
    }

    public function agencia()
    {
    	return $this->belongsTo(Agencia::class);
    }

    public function posto_graduacao()
    {
    	return $this->belongsTo(PostoGraduacao::class);
    }

    public function escolaridade()
    {
    	return $this->belongsTo(Escolaridade::class);
    }

    public function area_formacao()
    {
    	return $this->belongsTo(AreaFormacao::class);
    }



    public function ativar()
    {
    	$this->data_saida 	= null;
    	$this->status 		= 0;
    	$this->save();
    }

    public function desativar()
    {
    	$this->data_saida 	= date('Y-m-d H:i:s');
    	$this->status 		= 1;
    	$this->save();		
    }

    public static function todosAtivos($columns = ['*'])
    {
    	return parent::all($columns)->where('status', 0)->where('agencia_id', auth()->user()->agencia_id);
    }

    public function historico()
    {
    	return $this->activities()->orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
    }

    public function protocolos_analista()
    {
    	return $this->hasMany(Protocolo::class, 'user_analista_id', 'id');
    }

    public function protocolos_elo()
    {
    	return $this->hasMany(Protocolo::class, 'user_elo_id', 'id');
    }

    public function isLevelAnalista()
    {
    	$user = auth()->user();
    	return $user->hasRole('analista-subsecao') || $user->hasRole('analista-regional') || $user->hasRole('analista-local');
    }

    public function isLevelElo()
    {
    	$user = auth()->user();
    	return $user->hasRole('elo');
    }

}
