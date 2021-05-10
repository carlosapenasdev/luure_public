<?php

namespace App\Models\Individuo;

use App\Models\Model;
use App\Models\Historico;
use App\Models\Comentario;
use App\Models\Individuo\IndividuoOperacao;
use App\Models\Individuo\EstatisticaIndividuo;
use App\Models\Individuo\EnderecoIndividuo;
use App\Models\Individuo\TelefoneIndividuo;
use App\Models\Individuo\TatuagemIndividuo;
use App\Models\Individuo\IndividuoOcorrencia;
use App\Models\Management\EstabelecimentoPrisional;
use App\Models\Management\FaccaoCriminosa;
use App\Models\Management\NaturezaCrime;
use App\Models\Operacao\Operacao;
use App\Models\Ocorrencia\Ocorrencia;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Models\Gestao\Opm\Opm;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Image;

class Individuo extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'nome'
		,'alcunha'
		,'mae'
		,'pai'
		,'rg'
		,'cpf'

		,'estabelecimento_prisional_id'
		,'faccao_criminosa_id'
		,'funcao_faccao'
		,'observacoes'

		,'foto01'
		,'foto02'
		,'foto03'
		,'tipo_militar'
		,'opm_id'
		
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'individuo';

	protected const TP_MILITAR 			= [

		['id' => 1 , 'name' => 'PM_ATIVA'],
		['id' => 2 , 'name' => 'PM_RR'],

		['id' => 3 , 'name' => 'BM_ATIVA'],
		['id' => 4 , 'name' => 'BM_RR'],
	];

	protected $appends = ['perfil', 'id_nome', 'thumb'];

	public function getPerfilAttribute()
	{
		return $this->getFoto(1);
	}

	public function getIdNomeAttribute()
	{
		$nome = '#'.$this->id.' '.$this->nome;
		$nome .= !empty($this->rg) ? ' | RG '. $this->rg : '';

		return $nome;
	}

	public function getThumbAttribute()
	{
		$foto = $this->getFoto(1);

		if($foto == '/upload/empty.jpg')
			$file = '/upload/empty_thumb.jpg';
		else
			$file = str_replace('_foto01_', '_thumb_', $foto);

		return file_exists(public_path($file)) ? $file : '/upload/empty_thumb.jpg';
	}

	public function enderecos()
	{
		return $this->hasMany(EnderecoIndividuo::class);
	}

	public function telefones()
	{
		return $this->hasMany(TelefoneIndividuo::class);
	}

	public function tatuagens()
	{	
		return $this->hasMany(TatuagemIndividuo::class);
	}

	public function crimes()
	{	
		return $this->belongsToMany(NaturezaCrime::class);
	}

	public function estabelecimentoPrisional()
	{	
		return $this->belongsTo(EstabelecimentoPrisional::class);
	}

	public function faccaoCriminosa()
	{	
		return $this->belongsTo(FaccaoCriminosa::class);
	}

	public function vinculos()
	{
		return $this->vinculoIda();
	}

	public function vinculoIda()
	{
		return $this->belongsToMany(Individuo::class, 'individuo_vinculos', 'individuo_id', 'vinculo_id');
	}

	public function vinculoRetorno()
	{
		return $this->belongsToMany(Individuo::class, 'individuo_vinculos', 'vinculo_id', 'individuo_id');
	}

	public function operacoes()
	{
		return $this->belongsToMany(Operacao::class, 'individuo_operacao', 'individuo_id', 'operacao_id')->using(IndividuoOperacao::class);
	}

	public function estatisticas()
	{
		return $this->belongsToMany(Estatistica::class, 'estatistica_individuo', 'individuo_id', 'estatistica_id')->using(EstatisticaIndividuo::class);
	}

	public function ocorrencias()
	{
		return $this->belongsToMany(Ocorrencia::class, 'individuo_ocorrencia', 'individuo_id', 'ocorrencia_id')->using(IndividuoOcorrencia::class);
	}

	public function comentarios()
	{
		return $this->belongsToMany(Comentario::class);
	}

	public function opm()
	{	
		return $this->belongsTo(Opm::class);
	}

	public function comentar($data)
	{
		$dataComentario['user_id'] 		= auth()->user()->id;
		$dataComentario['descricao'] 	= json_encode($data['comentario']);
		$comentario 					= Comentario::create($dataComentario);

		$this->comentarios()->attach($comentario);

		return $comentario;
	}

	public function hasFoto01()
	{
		return !is_null($this->foto01);
	}

	public function hasFoto02()
	{
		return !is_null($this->foto02);
	}

	public function hasFoto03()
	{
		return !is_null($this->foto03);
	}

	public function hasAlcunha()
	{
		return !is_null($this->alcunha);
	}

	public function hasMae()
	{
		return !is_null($this->mae);
	}

	public function hasPai()
	{
		return !is_null($this->pai);
	}

	public function hasRg()
	{
		return !is_null($this->rg);
	}

	public function hasCpf()
	{
		return !is_null($this->cpf);
	}

	public function hasFuncaoFaccao()
	{
		return !is_null($this->cpf);
	}

	public function getFoto($foto)
	{
		return !is_null($this->{'foto0'.$foto}) ? '/'.$this->{'foto0'.$foto} : '/upload/empty.jpg';
	}

	public function atividades()
	{
		return $this->activities()->orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
	}

	public function historico()
	{
		return $this->getHistorico();
	}

	private function getHistorico()
	{
		$comentarios 	= $this->comentarios;
		$atividades 	= $this->atividades();

		$historico 		= $comentarios->merge($atividades);
		$historico 		= $historico->sortByDesc('created_at');
		$historico 		= Historico::trataHistoricoIndividuo($historico);
		
		return $historico;
	}

	public static function individuos($comigo = true)
	{
		if($comigo === true)
			$lista = self::all();
		else
			$lista = self::whereNotIn('id', [$comigo->id])->get();

		return $lista;
	}

	public static function buscar($request)
	{
		$busca 	= self::where('id', '<>', '');

		if($request->has('nome') && !empty($request->nome))
			$busca = $busca->where('nome', 'LIKE', '%'.$request->nome.'%');

		if($request->has('alcunha') && !empty($request->alcunha))
			$busca = $busca->where('alcunha', 'LIKE', '%'.$request->alcunha.'%');

		if($request->has('mae') && !empty($request->mae))
			$busca = $busca->where('mae', 'LIKE', '%'.$request->mae.'%');

		if($request->has('pai') && !empty($request->pai))
			$busca = $busca->where('pai', 'LIKE', '%'.$request->pai.'%');

		if($request->has('rg') && !empty($request->rg))
			$busca = $busca->where('rg', $request->rg);

		if($request->has('cpf') && !empty($request->cpf))
			$busca = $busca->where('cpf', $request->cpf);

		if($request->has('funcao_faccao') && !empty($request->funcao_faccao))
			$busca = $busca->where('funcao_faccao', 'LIKE', '%'.$request->funcao_faccao.'%');

		if($request->has('estabelecimento_prisional_id') && !empty($request->estabelecimento_prisional_id))
			$busca = $busca->where('estabelecimento_prisional_id', $request->estabelecimento_prisional_id);

		if($request->has('faccao_criminosa_id') && !empty($request->faccao_criminosa_id))
			$busca = $busca->where('faccao_criminosa_id', $request->faccao_criminosa_id);

		if($request->has('tipo_militar') && !empty($request->tipo_militar))
			$busca = $busca->where('tipo_militar', $request->tipo_militar);

		if(request()->is('publico-interno*'))
			$busca = $busca->where('tipo_militar', '<>', 0);

		if($request->has('opm_id') && !empty($request->opm_id))
			$busca = $busca->where('opm_id', $request->opm_id);

		if($request->has('observacoes') && !empty($request->observacoes))
			$busca = $busca->where('observacoes', 'LIKE', '%'.$request->observacoes.'%');
		
		$busca 			= $busca->get();

		if(!empty($request->endereco['estado_id']) ||
		   !empty($request->endereco['cidade_id']) ||
		   !empty($request->endereco['rua']) ||
		   !empty($request->endereco['numero']) ||
		   !empty($request->endereco['bairro']) ||
		   !empty($request->endereco['observacao'])
		)
		{
			$busca 			= $busca->filter(function($individuo) use ($request)
			{
				$enderecos 	= EnderecoIndividuo::whereIn('id', $individuo->enderecos->pluck('id'));

				if(!empty($request->endereco['estado_id']))
					$enderecos = $enderecos->where('estado_id', $request->endereco['estado_id']);

				if(!empty($request->endereco['cidade_id']))
					$enderecos = $enderecos->where('cidade_id', $request->endereco['cidade_id']);

				if(!empty($request->endereco['rua']))
					$enderecos = $enderecos->where('rua', 'LIKE', '%'.$request->endereco['rua'].'%');

				if(!empty($request->endereco['numero']))
					$enderecos = $enderecos->where('numero', $request->endereco['numero']);

				if(!empty($request->endereco['bairro']))
					$enderecos = $enderecos->where('bairro', 'LIKE', '%'.$request->endereco['bairro'].'%');

				if(!empty($request->endereco['observacao']))
					$enderecos = $enderecos->where('observacao', 'LIKE', '%'.$request->endereco['observacao'].'%');

				$enderecos 		= $enderecos->get();

				if($enderecos->count() > 0)
					return $individuo;
			});
		}

		if(!empty($request->telefone['telefone']) ||
		   !empty($request->telefone['observacao'])
		)
		{
			$busca 			= $busca->filter(function($individuo) use ($request)
			{
				$telefones 	= TelefoneIndividuo::whereIn('id', $individuo->telefones->pluck('id'));

				if(!empty($request->telefone['telefone']))
					$telefones = $telefones->where('telefone', $request->telefone['telefone']);

				if(!empty($request->telefone['observacao']))
					$telefones = $telefones->where('observacao', 'LIKE', '%'.$request->telefone['observacao'].'%');

				$telefones 		= $telefones->get();

				if($telefones->count() > 0)
					return $individuo;
			});
		}

		if(	!empty($request->tatuagem['padrao_desenho_id']) ||
		   !empty($request->tatuagem['regiao_corpo_id']) ||
		   !empty($request->tatuagem['detalhamento'])
		)
		{
			$busca 			= $busca->filter(function($individuo) use ($request)
			{
				$tatuagens 	= TatuagemIndividuo::whereIn('id', $individuo->tatuagens->pluck('id'));

				if(!empty($request->tatuagem['padrao_desenho_id']))
					$tatuagens = $tatuagens->where('padrao_desenho_id', $request->tatuagem['padrao_desenho_id']);

				if(!empty($request->tatuagem['regiao_corpo_id']))
					$tatuagens = $tatuagens->where('regiao_corpo_id', $request->tatuagem['regiao_corpo_id']);

				if(!empty($request->tatuagem['detalhamento']))
					$tatuagens = $tatuagens->where('detalhamento', 'LIKE', '%'.$request->tatuagem['detalhamento'].'%');

				$tatuagens 		= $tatuagens->get();

				if($tatuagens->count() > 0)
					return $individuo;
			});
		}

		if($request->has('natureza') && !empty($request->natureza))
		{
			$busca 		= $busca->filter(function($individuo) use ($request)
			{
				$crimes 			= $individuo->crimes;
				$crimesBuscados 	= $request->natureza;
				
				$crimes->filter(function($crime) use ($request, &$crimesBuscados)
				{
					if(in_array($crime->codigo, $request->natureza))
					{
						unset($crimesBuscados[ array_search($crime->codigo, $request->natureza) ]);
						return $crime;
					}
				});

				if(count($crimesBuscados) == 0)
					return $individuo;
			});
		}

		/*
		,'tipo_militar'
		,'opm_id'*/
		
		return $busca;
	}


	public static function individuosToChip($comigo = true)
	{
		return self::individuos($comigo)->pluck('thumb', 'id_nome')->toJson();
	}

	public static function tiposMilitar()
	{
		return collect(self::TP_MILITAR);
	}

	public static function elementos()
	{
		return self::where('tipo_militar', 0)->get();
	}

	public static function publicoInterno()
	{
		return self::where('tipo_militar', '<>',0)->get();
	}

	public function gerarThumb()
	{
		if($this->hasFoto01())
		{
        	$foto 			= public_path($this->foto01);
			
			if(file_exists($foto))
			{	
				$thumbPath 	= public_path(str_replace('_foto01_', '_thumb_', $this->foto01));
			
				copy($foto, $thumbPath);

				$img 		= Image::make($thumbPath)->resize(40, 40, function ($constraint)
				{
					$constraint->aspectRatio();
				});

				$img->save($thumbPath);
			}
		}
	}
}
