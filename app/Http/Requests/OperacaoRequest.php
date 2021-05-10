<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use Lang;
use Alert;

class OperacaoRequest extends FormRequest
{
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
    		'user_cadastro_id' 	=> Lang::get('controller/operacao.field_user_cadastro_id'),
    		'nome' 				=> Lang::get('controller/operacao.field_nome'),
    		'cidade_id' 		=> Lang::get('controller/operacao.field_cidade_id'),
    		'vara' 				=> Lang::get('controller/operacao.field_vara'),
    		'juiz' 				=> Lang::get('controller/operacao.field_juiz'),
    		'promotor' 			=> Lang::get('controller/operacao.field_promotor'),
    		'data_inicio' 		=> Lang::get('controller/operacao.field_data_inicio'),
    		'data_termino' 		=> Lang::get('controller/operacao.field_data_termino'),
    		'resumo' 			=> Lang::get('controller/operacao.field_resumo'),
    		'status' 			=> Lang::get('controller/operacao.field_status'),
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
    		'cidade_id'  		=> 'required|exists:cidades,id',
    		'nome' 				=> 'string|required|min:3',
    		#'vara' 				=> 'string|required|min:3',
    		#'juiz' 				=> 'string|required|min:3',
    		#'promotor' 			=> 'string|required|min:3',
    		'data_inicio' 		=> 'required|date_format:"d/m/Y"',
    		'data_termino' 		=> 'nullable|date_format:"'.Lang::get('data.formato_data').'"|after_or_equal:data_inicio',
    		'resumo' 			=> 'string|required|min:3',
    		'status' 			=> 'boolean|required',
    	];
    	
    	if(strtoupper($this->method()) == 'POST')
    		$rules += ['user_cadastro_id'  => 'required|exists:users,id'];

    	return $rules;
    }

    protected function prepareForValidation()
    {
    	if($this->has('status'))
    		$this->merge(['status' => (bool) $this->status]);

    	if(strtoupper($this->method()) == 'POST')
    		$this->merge([
    			'user_cadastro_id' => auth()->user()->id,
    		]);
    }

    protected function failedValidation(Validator $validator)
    {
    	Alert::error(Lang::get('validation.show_error_sweet'))->persistent(true, false)->autoClose(config('sweetalert.timer'));
    	parent::failedValidation($validator);
    }

    protected function getValidatorInstance()
    {
    	return parent::getValidatorInstance()->after([$this, "afterValidate"]);
    }

    public function afterValidate()
    {
    	$this->merge(['data_inicio' => getCarbonDate($this->data_inicio)]);
    	
    	if($this->has('data_termino') && !is_null($this->data_termino))
    		$this->merge(['data_termino' => getCarbonDate($this->data_termino)]);
    }
}
