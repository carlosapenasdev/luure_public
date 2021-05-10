<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Individuo\Individuo;
class CreateIndividuoThumbs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	$individuos = Individuo::all();

    	if(!file_exists(public_path('storage/individuo/'))
    		mkdir(public_path('storage/individuo/'));
    	
    	$arquivos 	= scandir(public_path('storage/individuo/'));
    	foreach ($arquivos as $key => $arquivo)
    	{
    		$arquivos[$key] = public_path('storage/individuo/'.$arquivo);
    	}
    	
    	foreach ($individuos as $individuo)
    	{
    		if(!is_null($individuo->foto01))
    		{
    			$foto01 = public_path($individuo->foto01);
    			if(file_exists($foto01))
    			{
    				$key = array_search($foto01, $arquivos);
    				unset($arquivos[$key]);
    			}
    		}

    		if(!is_null($individuo->foto02))
    		{
    			$foto02 = public_path($individuo->foto02);
    			if(file_exists($foto02))
    			{
    				$key = array_search($foto02, $arquivos);
    				unset($arquivos[$key]);
    			}
    		}

    		if(!is_null($individuo->foto03))
    		{
    			$foto03 = public_path($individuo->foto03);
    			if(file_exists($foto03))
    			{
    				$key = array_search($foto03, $arquivos);
    				unset($arquivos[$key]);
    			}
    		}

    		$tatoos = $individuo->tatuagens;

    		foreach ($tatoos as $key => $tatoo)
    		{
    			if(!is_null($tatoo->tatuagem))
    			{
    				$tatuagem = public_path($tatoo->tatuagem);
    				if(file_exists($tatuagem))
    				{
    					$key = array_search($tatuagem, $arquivos);
    					unset($arquivos[$key]);
    				}
    			}
    		}
    	}

    	foreach ($arquivos as $arquivo)
    	{
    		if(is_file($arquivo))
    			unlink($arquivo);
    	}

    	foreach ($individuos as $individuo)
    	{
    		$individuo->gerarThumb();
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	
    }
}
