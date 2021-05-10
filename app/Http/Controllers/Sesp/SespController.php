<?php

namespace App\Http\Controllers\Sesp;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use App\Services\SespService;
use App\Services\BouService;

use Alert;
use Lang;

class SespController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadBou(Request $request)
    {
    	try
    	{
    		$resultado = BouService::getBou($request);

    		$response = new Request($resultado);

    		return view('sesp/response', compact('request', 'response'));

    	}
    	catch (\Throwable $th)
    	{
    		if((\App::environment('local') || \App::environment('debug')) && auth()->user()->hasRole('root'))
    			dd($th);

    		$re = '/(?=.*?\bfailed\b)(?=.*?\bconnect\b)(?=(.*?\blocalhost\b))^.*$/mi';
    		preg_match_all($re, $th->getMessage(), $offline, PREG_SET_ORDER, 0);

    		if(array_key_exists($th->getCode(), Lang::get('sesp.error_code')))
    			$msg = $th->getMessage();
    		
    		elseif(count($offline) > 0)
    		{
    			$msg = __('sesp.error_message.103');
    		}
    		else
    		{
    			$msg = __('sesp.error');
    		}

    		Alert::error( $msg )->persistent(true, false)->autoClose(config('sweetalert.timer'));

    		if ($request->has('destino') && !empty($request->destino))
    			return redirect($request->destino);
    		else
    			return redirect()->back();
    	}
    }
}
