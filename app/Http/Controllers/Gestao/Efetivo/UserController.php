<?php

namespace App\Http\Controllers\Gestao\Efetivo;

use App\Http\Controllers\Controller;
use App\Models\Gestao\Efetivo\User;
use App\Models\Management\Role;
use Illuminate\Http\Request;
use App\Http\Requests\EfetivoRequest;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Models\Gestao\Efetivo\PostoGraduacao;
use App\Models\Gestao\Efetivo\Escolaridade;
use App\Models\Gestao\Efetivo\AreaFormacao;
use App\Models\Gestao\Agencia\Agencia;
use Lang;
use Alert;
use Auth;

class UserController extends Controller
{
	protected $rules = [
		'name'  => 'string|required|min:3',
		'email' => 'string|required|min:3|unique:users',
		'role_id' => 'required|exists:roles,id',
	];

	public function __construct()
	{
		parent::__construct('user');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::all();
    	return $this->view('management/user/browse', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$agencias 	= [];

    	$agencias 	= Agencia::usaveis();

    	if(auth()->user()->hasRole('root'))
    		$roles 		= Role::all();
    	else
    	
    		$roles = Role::all()->except(Role::root()->id);
    	
    	$postoGraduacaos 	= PostoGraduacao::all();
    	$escolaridades 		= Escolaridade::all();
    	$areaFormacaos 		= AreaFormacao::all();

    	return $this->view('management/user/form', compact('roles', 'postoGraduacaos', 'escolaridades', 'areaFormacaos', 'agencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EfetivoRequest $request)
    {
    	$role 					= Role::findOrFail($request['role_id']);
    	$request['password'] 	= bcrypt('123456');

    	$user 					= User::create($request->all());

    	$user->roles()->sync($role);

    	return redirect()->route('user.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestao\Efetivo\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    	if(auth()->user()->hasRole('root'))
    		$roles = Role::all();
    	else
    		$roles = Role::all()->except(Role::root()->id);

    	$agencias 	= Agencia::usaveis();

    	$postoGraduacaos 	= PostoGraduacao::all();
    	$escolaridades 		= Escolaridade::all();
    	$areaFormacaos 		= AreaFormacao::all();
    	$readonly 			= true;

    	return $this->view('management/user/form', compact('user', 'roles', 'postoGraduacaos', 'escolaridades', 'areaFormacaos', 'readonly', 'agencias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestao\Efetivo\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    	if(auth()->user()->hasRole('root'))
    		$roles = Role::all();
    	else
    		$roles = Role::all()->except(Role::root()->id);

    	$agencias 	= Agencia::usaveis();

    	$postoGraduacaos 	= PostoGraduacao::all();
    	$escolaridades 		= Escolaridade::all();
    	$areaFormacaos 		= AreaFormacao::all();

    	return $this->view('management/user/form', compact('user', 'roles', 'postoGraduacaos', 'escolaridades', 'areaFormacaos', 'agencias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gestao\Efetivo\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(EfetivoRequest $request, User $user)
    {
    	$role = Role::find($request->role_id);

    	$user->update($request->all());

    	$user->roles()->sync($role);

    	return redirect()->route('user.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestao\Efetivo\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
    	/*
    	$user->delete();

    	if(auth()->user()->id == $user->id)
    	{
    		Auth::logout();

    		return redirect('/');
    	}

    	return redirect()->route('user.index')->withSuccess(Lang::get('common.sucess_deleted'));
    	*/
    }

    public function ativar(User $user)
    {
    	$user->ativar();

    	return redirect()->route('user.index')->withSuccess(Lang::get('common.sucess_ativar'));
    }

    public function desativar(User $user)
    {
    	$user->desativar();

    	return redirect()->route('user.index')->withSuccess(Lang::get('common.sucess_desativar'));
    }

    public function perfil()
    {
    	#$user = auth()->user();
    	#return $this->view('management/user/perfil', compact('user'));
    }

    public function trocaSenha()
    {
    	return view('management/user/trocaSenha');
    }

    public function trocarSenha(Request $request)
    {
    	$user 			= auth()->user();
    	$user->password = bcrypt($request->password);
    	$user->save();

    	return redirect(RouteServiceProvider::HOME)->withSuccess(Lang::get('controller/user.pass_changed'));
    }

    public function resetarSenha(User $user)
    {
    	$user->password = bcrypt('123456');
    	$user->save();

    	return redirect()->route('user.index')->withSuccess(Lang::get('controller/user.pass_changed'));
    }
}
