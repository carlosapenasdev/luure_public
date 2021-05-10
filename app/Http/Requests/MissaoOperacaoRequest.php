<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use App\Models\Operacao\Operacao;
use App\Models\Protocolo\Estagio;
use Lang;
use Alert;

class MissaoOperacaoRequest extends FormRequest
{
	protected const METHOD_CREATE = 'POST';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	return (auth()->user()->hasRole('root', 'sysadmin','chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local'));
    }

    public function attributes()
    {
    	return [
    		'assunto_principal' 	=> Lang::get('controller/missaooperacao.field_assunto_principal'),
    		'elabora_ob' 			=> Lang::get('controller/missaooperacao.field_elabora_ob'),
    		'user_elo_id' 			=> Lang::get('controller/missaooperacao.field_user_elo_id'),
    		'dias_prazo_elo' 		=> Lang::get('controller/missaooperacao.field_dias_prazo_elo'),
    		'data_recebeu_elo' 		=> Lang::get('controller/missaooperacao.field_data_recebeu_elo'),
    		'data_elo_encerrou' 	=> Lang::get('controller/missaooperacao.field_data_elo_encerrou'),
    		'user_cadastro_id' 		=> Lang::get('controller/missaooperacao.field_user_cadastro_id'),
    		'user_analista_id' 		=> Lang::get('controller/missaooperacao.field_user_analista_id'),
    		'data_atribuiu_elo' 	=> Lang::get('controller/missaooperacao.field_data_atribuiu_elo'),
    		'prazo_final' 			=> Lang::get('controller/missaooperacao.field_prazo_final'),
    		'conclusao_elo' 		=> Lang::get('controller/missaooperacao.field_conclusao_elo'),
    		'conclusao_analista' 	=> Lang::get('controller/missaooperacao.field_conclusao_analista'),
    		'estagio_id' 			=> Lang::get('controller/missaooperacao.field_estagio_id'),
    	];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	$rules = [
    		'user_elo_id'  		=> 'required|exists:users,id',
    		'elabora_ob'  		=> 'required|boolean',
    		'dias_prazo_elo'  	=> 'required|integer',
    		'numero'  			=> 'required|integer',
    		'assunto_principal'	=> 'required|string',
    	];
    	
    	if(strtoupper($this->method()) == self::METHOD_CREATE)
    	{
    		$rules += ['operacao_id'  		=> 'required|exists:operacaos,id'];
    		$rules += ['user_cadastro_id'  	=> 'required|exists:users,id'];
    		$rules += ['user_analista_id'  	=> 'required|exists:users,id'];
    		$rules += ['data_atribuiu_elo' 	=> 'required|date'];
    		$rules += ['arquivo' 			=> 'required|file'];
    		#$rules += ['data_recebeu_elo' 	=> 'required|date'];
    		#$rules += ['prazo_final' 		=> 'required|date'];
    		#$rules += ['estagio_id' 		=> 'required|exists:estagios,id'];
    	}

    	return $rules;
    }

    protected function prepareForValidation()
    {
    	$this->converteOperacaoSlug();

    	if(strtoupper($this->method()) == self::METHOD_CREATE)
    	{
    		$this->merge([
    			'user_cadastro_id' 	=> auth()->user()->id,
    			'user_analista_id' 	=> auth()->user()->id,
    			'data_atribuiu_elo' => \Carbon\Carbon::now(),
    			'estagio_id' 		=> Estagio::elo()->id,
    		]);
    	}
    }

    protected function failedValidation(Validator $validator)
    {
    	Alert::error(Lang::get('validation.show_error_sweet'))->persistent(true, false)->autoClose(config('sweetalert.timer'));
    	parent::failedValidation($validator);
    }

    public function withValidator(Validator $validator): void
    {
    	$validator->after(function (Validator $validator)
    	{
    		if(empty($validator->failed()))
    		{

    		}
    	});
    }

    private function converteOperacaoSlug()
    {
    	if($this->has('operacao_id'))
    	{
    		$operacao = Operacao::findBySlug($this->operacao_id);

    		if(!is_null($operacao))
    			$this->merge(['operacao_id' => $operacao->id]);
    	}
    }
}
