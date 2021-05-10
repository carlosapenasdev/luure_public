<?php

use Illuminate\Database\Seeder;
use App\Models\Management\DocumentoTipo;

class DocumentoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Ordem de Busca';
    	$tipo->tipo = 1;
    	$tipo->changeable = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Relatório de Busca';
    	$tipo->tipo = 1;
    	$tipo->changeable = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Parte';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Mandado Judicial';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'E-Mail';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Ofício';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'P.B CI';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'P.B ARI';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'O.B ALI 1º BPM';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Verbal Cmt. OPM';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Verbal Chefe ALI';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Requerimento';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Denúncia 181';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'E-Protocolo';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Relatório';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Iniciativa do Agente';
    	$tipo->tipo = 0;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Informação';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'RELINT';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'COMINT';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'RT';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Direto';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Relatório';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Ofício';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Parte';
    	$tipo->tipo = 1;
    	$tipo->save();

    	$tipo 		= new DocumentoTipo();
    	$tipo->nome = 'Pedido de Busca';
    	$tipo->tipo = 1;
    	$tipo->save();

    }
}
