<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return redirect('login');
});

Auth::routes(['register' => false, 'sobre' => false]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/dashboard/buscar-estatistica', 'DashboardController@buscarEstatistica')->name('dashboard.buscar-estatistica');

Route::get('/perfil', 'Gestao\Efetivo\UserController@perfil')->name('user.perfil')->middleware(['auth']);
Route::get('/troca-senha', 'Gestao\Efetivo\UserController@trocaSenha')->name('user.trocaSenha')->middleware(['auth']);
Route::post('/troca-senha/post', 'Gestao\Efetivo\UserController@trocarSenha')->name('user.trocarSenha')->middleware(['auth']);

Route::prefix('protocolo')->group(function ()
{
	Route::post('/buscar', 'Protocolo\ProtocoloController@buscar')->name('protocolo.buscar')->middleware(['auth']);
	Route::get('{protocolo}/despacho', 'Protocolo\ProtocoloController@despacho')->name('protocolo.despacho')->middleware(['auth']);
	Route::get('{protocolo}/enviar-agencias', 'Protocolo\ProtocoloController@enviarAgencias')->name('protocolo.enviarAgencias')->middleware(['auth']);
	Route::get('{protocolo}/diretochefia', 'Protocolo\ProtocoloController@diretochefia')->name('protocolo.diretochefia')->middleware(['auth']);
	Route::get('{protocolo}/diretoelo', 'Protocolo\ProtocoloController@diretoelo')->name('protocolo.diretoelo')->middleware(['auth']);
	Route::put('{protocolo}/despachar', 'Protocolo\ProtocoloController@despachar')->name('protocolo.despachar')->middleware(['auth']);
	Route::post('{protocolo}/pessoas', 'Protocolo\ProtocoloController@pessoas')->name('protocolo.pessoas')->middleware(['auth']);

	Route::get('{protocolo}/devolucao', 'Protocolo\ProtocoloController@devolucao')->name('protocolo.devolucao')->middleware(['auth']);
	Route::put('{protocolo}/devolver', 'Protocolo\ProtocoloController@devolver')->name('protocolo.devolver')->middleware(['auth']);
	Route::post('{protocolo}/visibilidade', 'Protocolo\ProtocoloController@visibilidade')->name('protocolo.visibilidade')->middleware(['auth', 'role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto']);

	Route::post('{protocolo}/documento-upload',  'Protocolo\ProtocoloController@documentoUpload')->name('protocolo.documentoUpload')->middleware(['auth']);
	Route::get('{protocolo}/documento-edit/{documento}',  'Protocolo\ProtocoloController@showDocumentoEdit')->name('protocolo.showDocumentoEdit')->middleware(['auth']);
	Route::post('{protocolo}/documento-edit/{documento}',  'Protocolo\ProtocoloController@documentoChange')->name('protocolo.documentoChange')->middleware(['auth']);
	
	Route::get('{protocolo}/arquive', 'Protocolo\ProtocoloController@arquive')->name('protocolo.arquive')->middleware(['auth', 'role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto']);
});
Route::get('/paramim', 'Protocolo\ProtocoloController@paramim')->name('protocolo.paramim')->middleware(['auth']);
Route::resource('protocolo', 'Protocolo\ProtocoloController')->middleware(['auth']);

Route::resource('contrainteligencia', 'Protocolo\ContraInteligenciaController', ['parameters' => [
	'contrainteligencia' => 'contra'
]])->middleware(['auth']);

Route::prefix('operacao')->group(function ()
{
	Route::post('buscar', 'Operacao\OperacaoController@buscar')->name('operacao.buscar')->middleware(['auth']);
	Route::post('{operacao}/terminar', 'Operacao\OperacaoController@terminar')->name('operacao.terminar')->middleware(['auth']);
	Route::post('{operacao}/reabrir', 'Operacao\OperacaoController@reabrir')->name('operacao.reabrir')->middleware(['auth']);
	Route::post('{operacao}/documento-upload',  'Operacao\OperacaoController@uploadDocumento')->name('operacao.uploadDocumento')->middleware(['auth']);
	Route::post('{operacao}/documento-delete/{documento}',  'Operacao\OperacaoController@uploadDelete')->name('operacao.uploadDelete')->middleware(['auth']);
	Route::get('{operacao}/missaoop/{missaoop}/despacho', 'Operacao\MissaoOperacaoController@despacho')->name('operacao.missaoop.despacho')->middleware(['auth']);
	Route::put('{operacao}/missaoop/{missaoop}/despachar', 'Operacao\MissaoOperacaoController@despachar')->name('operacao.missaoop.despachar')->middleware(['auth']);
	Route::get('{operacao}/missaoop/{missaoop}/devolucao', 'Operacao\MissaoOperacaoController@devolucao')->name('operacao.missaoop.devolucao')->middleware(['auth']);
	Route::put('{operacao}/missaoop/{missaoop}/devolver',  'Operacao\MissaoOperacaoController@devolver')->name('operacao.missaoop.devolver')->middleware(['auth']);
});
Route::resource('operacao', 'Operacao\OperacaoController')->middleware(['auth']);

Route::resource('operacao.missaoop', 'Operacao\MissaoOperacaoController')->middleware(['auth']);

Route::post('estatistica/buscar', 'Gestao\Estatistica\EstatisticaController@buscar')->name('estatistica.buscar')->middleware(['auth', 'role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local']);
Route::resource('estatistica', 'Gestao\Estatistica\EstatisticaController')->middleware(['auth', 'role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local']);

Route::post('ocorrencias/buscar', 'Ocorrencia\OcorrenciaController@buscar')->name('ocorrencias.buscar')->middleware(['auth']);
Route::post('ocorrencias/unique', 'Ocorrencia\OcorrenciaController@unique')->name('ocorrencias.unique')->middleware(['auth']);
Route::get('ocorrencias/criar', 'Ocorrencia\OcorrenciaController@criar')->name('ocorrencias.criar-get')->middleware(['auth']);
Route::post('ocorrencias/criar', 'Ocorrencia\OcorrenciaController@criar')->name('ocorrencias.criar-post')->middleware(['auth']);
Route::get('ocorrencias/importar-sesp', 'Ocorrencia\OcorrenciaController@importarSesp')->name('ocorrencias.importar-sesp')->middleware(['auth']);
Route::resource('ocorrencias', 'Ocorrencia\OcorrenciaController')->middleware(['auth']);

Route::post('sesp/load-bou', 'Sesp\SespController@loadBou')->name('sesp.loadBou')->middleware(['auth']);


Route::get('efetivo/download/', 'Gestao\Efetivo\EfetivoController@download')->name('efetivo.download')->middleware(['auth'/*, 'role:root|sysadmin|chefe'*/]);

Route::resource('efetivo', 'Gestao\Efetivo\EfetivoController', [
	'parameters' => [
		'efetivo' => 'user'
	],
	'except' => [
		'store', 'update', 'destroy', 'edit'
	]
]
)->middleware(['auth']);

Route::get('sistemas', 'Gestao\Sistema\SistemaController@exibe')->name('sistemas.exibe')->middleware(['auth']);
Route::resource('gestao/sistemas', 'Gestao\Sistema\SistemaController')->middleware(['auth', 'role:root|sysadmin']);
Route::post('individuo/unique', 'Individuo\IndividuoController@unique')->name('individuo.unique')->middleware(['auth']);
Route::post('individuo/buscar', 'Individuo\IndividuoController@buscar')->name('individuo.buscar')->middleware(['auth']);
Route::resource('individuo', 'Individuo\IndividuoController')->middleware(['auth']);

Route::post('publico-interno/buscar', 'Individuo\IndividuoController@buscar')->name('publico-interno.buscar')->middleware(['auth']);
Route::resource('publico-interno', 'Individuo\IndividuoController', ['parameters' => [
	'publico-interno' => 'individuo'
]])->middleware(['auth', 'role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local']);




Route::post('/estado/{estado}/lista-cidades', 'Management\EstadoController@listaCidades')->name('estado.listaCidades')->middleware(['auth']);

Route::resource('gestao/agencias', 'Gestao\Agencia\AgenciaController')->middleware(['auth', 'role:root']);



Route::prefix('gestao/efetivo')->group(function (){
	Route::resource('area-formacao', 'Gestao\Efetivo\AreaFormacaoController', ['parameters' => [
		'area-formacao' => 'areaFormacao'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('escolaridade', 'Gestao\Efetivo\EscolaridadeController')->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('posto-graduacao', 'Gestao\Efetivo\PostoGraduacaoController', ['parameters' => [
		'posto-graduacao' => 'postoGraduacao'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::post('user/{user}/resetar-senha', 'Gestao\Efetivo\UserController@resetarSenha')->name('user.resetarSenha')->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::post('user/{user}/ativar', 'Gestao\Efetivo\UserController@ativar')->name('user.ativar')->middleware(['auth', 'role:root|sysadmin|chefe']);
	Route::post('user/{user}/desativar', 'Gestao\Efetivo\UserController@desativar')->name('user.desativar')->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('user', 'Gestao\Efetivo\UserController')->middleware(['auth', 'role:root|sysadmin|chefe']);

});

Route::prefix('gestao/estatistica')->group(function ()
{
	Route::resource('origem-estatistica', 'Gestao\Estatistica\OrigemEstatisticaController', ['parameters' => [
		'origem-estatistica' => 'origemEstatistica'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('acao-estatistica', 'Gestao\Estatistica\AcaoEstatisticaController', ['parameters' => [
		'acao-estatistica' => 'acaoEstatistica'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('natureza-estatistica', 'Gestao\Estatistica\NaturezaEstatisticaController', ['parameters' => [
		'natureza-estatistica' => 'naturezaEstatistica'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);
});

Route::prefix('management')->group(function () {
	Route::get('/numeracao/{documentotipo}', 'Management\DocumentoTipoController@numeracao')->name('numeracao')->middleware(['auth']);

	Route::resource('ambiente', 'Management\AmbienteController')->middleware(['auth', 'role:root|sysadmin|chefe']);
	Route::resource('estabelecimento-prisional', 'Management\EstabelecimentoPrisionalController', ['parameters' => [
		'estabelecimento-prisional' => 'estabPri'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('faccao-criminosa', 'Management\FaccaoCriminosaController', ['parameters' => [
		'faccao-criminosa' => 'faccao'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('natureza-crime', 'Management\NaturezaCrimeController', ['parameters' => [
		'natureza-crime' => 'crime'
	]])->middleware(['auth', 'role:root|sysadmin']);

	Route::resource('origin', 'Management\OriginController')->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('padrao-desenho', 'Management\PadraoDesenhoController', ['parameters' => [
		'padrao-desenho' => 'padraoDesenho'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('regiao-corpo', 'Management\RegiaoCorpoController', ['parameters' => [
		'regiao-corpo' => 'regiaoCorpo'
	]])->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('thematic', 'Management\ThematicController')->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('documentotipo', 'Management\DocumentoTipoController')->middleware(['auth', 'role:root|sysadmin|chefe']);

	Route::resource('role', 'Management\RoleController')->middleware(['auth', 'role:root']);
});

Route::resource('gestao/opm', 'Gestao\Opm\OpmController')->middleware(['auth', 'role:root|sysadmin|chefe']);
Route::resource('gestao/canal', 'Gestao\Canal\CanalController')->middleware(['auth', 'role:root|sysadmin|chefe']);

Route::get('/sobre', 'SobreController@index')->name('sobre');