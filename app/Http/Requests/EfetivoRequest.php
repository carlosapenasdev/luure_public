<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use Lang;
use Alert;

class EfetivoRequest extends FormRequest
{
    protected const METHOD_CREATE = 'POST';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	return (auth()->user()->hasRole('root', 'sysadmin','chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto'));
    }

    public function attributes()
    {
    	return [
    		'posto_graduacao_id' 	=> Lang::get('controller/user.field_posto_graduacao_id'),
    		'escolaridade_id' 		=> Lang::get('controller/user.field_escolaridade_id'),
    		'area_formacao_id' 		=> Lang::get('controller/user.field_area_formacao_id'),
    		'email' 				=> Lang::get('controller/user.field_email'),
    		'role_id' 				=> Lang::get('controller/role.name_singular')
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
    		'posto_graduacao_id' 	=> 'required|exists:posto_graduacaos,id',
    		'escolaridade_id' 		=> 'required|exists:escolaridades,id',
    		'area_formacao_id' 		=> 'string|exists:area_formacaos,id',
    		'data_ingresso' 		=> 'required|date_format:"d/m/Y"',
    		'role_id' 				=> 'required|exists:roles,id',
    	];

    	if(strtoupper($this->method()) == self::METHOD_CREATE)
    	{
    		$rules += ['email'  		=> 'string|required|min:3|unique:users'];
    	}
    	
    	return $rules;
    }

    protected function prepareForValidation()
    {
    	foreach ($this->all() as $key => $value)
    	{
    		if(empty($value))
    			$this->request->remove($key);
    	}
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
    	if($this->has('data_ingresso'))
    		$this->merge(['data_ingresso' => getCarbonDate($this->data_ingresso)]);
    }
}
