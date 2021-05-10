<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lang;
use Alert;
use Illuminate\Support\Str;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	protected $bread;

	protected $attributes = [];

	public function __construct($controller = null)
	{
		$this->bread = [
			'index' 	=> ('common.controller_index')
			,'create' 	=> ('common.controller_create')
			,'store' 	=> ('common.controller_store')
			,'show' 	=> ('common.controller_show')
			,'edit' 	=> ('common.controller_edit')
			,'update' 	=> ('common.controller_update')
			,'destroy' 	=> ('common.controller_destroy')
		];

		if(!is_null($controller) && isset($this->rules))
		{	
			foreach ($this->rules as $key => $value)
			{
				$this->attributes[$key] = Lang::get('controller/'.$controller.'.field_'.$key);
			}
		}

		if(!request()->is('troca-senha*'))
		{
			$this->middleware('check.user.password');
			$this->middleware('check.user.status');
		}
	}

	public function view($bladeview, $params = null)
	{
		if(is_null($params))
			$params = [];


		$routeArray 					= app('request')->route()->getAction();
		$controllerAction 				= class_basename($routeArray['controller']);
		list($controller, $action) 		= explode('@', $controllerAction);
		
		$classe 						= strtolower(str_replace('Controller', '', $controller));
		$funcao 						= debug_backtrace()[1]['function'];
		$bread['bread']['name'] 		= Lang::get('controller/'.$classe.'.name');
		$bread['bread']['rota'] 		= str_replace('.'.$action, '', $routeArray['as']);
		
		if (isset($this->bread[$funcao]))
		{ 
			$bread['bread']['item'] = Lang::get($this->bread[$funcao]);
		}
		elseif (isset($params[$funcao]))
		{
			$bread['bread']['item'] = $params[$funcao];
		}
		else
		{
			$bread['bread']['item'] = ucfirst($funcao);
		}

		
		$routeParams = request()->route()->parameters;
		
		if(count($routeParams) > 0)
		{
			foreach ($routeParams as $nameParam => $routeParam)
				$bread['bread']['routeParams'][$nameParam] = $routeParam;
		}
		else
			$bread['bread']['routeParams'] = [];

		$params = $params + $bread;
		
		return view($bladeview, $params);

	}

	protected function validar(Request $request)
	{
		$retorno = null;
		$validator = Validator::make($request->all(), $this->rules)->setAttributeNames($this->attributes);

		if ($validator->fails())
		{
			Alert::error(Lang::get('validation.show_error_sweet'))->persistent(true, false)->autoClose(config('sweetalert.timer'));
			$retorno = back()->with('errors', $validator->messages()->all())->withInput();
		}
		return $retorno;
	}
}
