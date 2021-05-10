<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Models\Management\Cidade;
use App\Models\Management\Estado;
use App\Http\Controllers\Controller;

class EstadoController extends Controller
{
	public function __construct()
	{
		parent::__construct('estado');
	}

    public function listaCidades(Request $request, $estado)
    {
    	$estado = Estado::find($estado);
    	
    	return response()->json($estado->cidades, 200);
    }
}
