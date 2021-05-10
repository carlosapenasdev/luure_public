<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use Lang;
use Alert;

class EstatisticaRequest extends FormRequest
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
    		'acao_estatistica_id' => Lang::get('controller/estatistica.field_acao_estatistica_id'),
    		'natureza_estatistica_id' => Lang::get('controller/estatistica.field_natureza_estatistica_id'),
    		'origem_estatistica_id' => Lang::get('controller/estatistica.field_origem_estatistica_id'),
    		'data' => Lang::get('controller/estatistica.field_data'),
    		
    		'operacao' => Lang::get('controller/estatistica.field_operacao'),
    		'documentacao' => Lang::get('controller/estatistica.field_documentacao'),
    		'numero_boletim' => Lang::get('controller/estatistica.field_numero_boletim'),
    		'pessoas_detidas' => Lang::get('controller/estatistica.field_pessoas_detidas'),
    		'maconha' => Lang::get('controller/estatistica.field_maconha'),
    		'maconha_planta' => Lang::get('controller/estatistica.field_maconha_planta'),
    		'crack' => Lang::get('controller/estatistica.field_crack'),
    		'cocaina' => Lang::get('controller/estatistica.field_cocaina'),
    		'lsd' => Lang::get('controller/estatistica.field_lsd'),
    		'ecstasy' => Lang::get('controller/estatistica.field_ecstasy'),
    		'revolver' => Lang::get('controller/estatistica.field_revolver'),
    		'pistola' => Lang::get('controller/estatistica.field_pistola'),
    		'garrucha' => Lang::get('controller/estatistica.field_garrucha'),
    		'espingarda' => Lang::get('controller/estatistica.field_espingarda'),
    		'carabina' => Lang::get('controller/estatistica.field_carabina'),
    		'municoes' => Lang::get('controller/estatistica.field_municoes'),
    		'dinheiro' => Lang::get('controller/estatistica.field_dinheiro'),
    		'veiculo_fr' => Lang::get('controller/estatistica.field_veiculo_fr'),
    		'veiculo_transito' => Lang::get('controller/estatistica.field_veiculo_transito'),
    		'veiculo_ocorrencia' => Lang::get('controller/estatistica.field_veiculo_ocorrencia'),
    		
    		'celulares' => Lang::get('controller/estatistica.field_celulares'),
    		'balancas' => Lang::get('controller/estatistica.field_balancas'),
    		'outros' => Lang::get('controller/estatistica.field_outros'),
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
    		
    		'operacao' => 'string|required|min:2',

    		'acao_estatistica_id' => 'required|exists:acao_estatisticas,id',
    		'natureza_estatistica_id' => 'required|exists:natureza_estatisticas,id',
    		'origem_estatistica_id' => 'string|exists:origem_estatisticas,id',
    		'data' => 'required|date_format:"d/m/Y"',
    		'numero_boletim' => 'required|string',

    		'operacao' => 'sometimes|string',
    		'documentacao' => 'sometimes|string',

    		'pessoas_detidas' => 'sometimes|integer',
    		'maconha_planta' => 'sometimes|integer',
    		'lsd' => 'sometimes|integer',
    		'ecstasy' => 'sometimes|integer',
    		'revolver' => 'sometimes|integer',
    		'pistola' => 'sometimes|integer',
    		'garrucha' => 'sometimes|integer',
    		'espingarda' => 'sometimes|integer',
    		'carabina' => 'sometimes|integer',
    		'municoes' => 'sometimes|integer',
    		'veiculo_fr' => 'sometimes|integer',
    		'veiculo_transito' => 'sometimes|integer',
    		'veiculo_ocorrencia' => 'sometimes|integer',
    		'celulares' => 'sometimes|integer',
    		'balancas' => 'sometimes|integer',
    		
    		'maconha' => 'sometimes|regex:/^\d*(\.\d{1,3})?$/',
    		'crack' => 'sometimes|regex:/^\d*(\.\d{1,3})?$/',
    		'cocaina' => 'sometimes|regex:/^\d*(\.\d{1,3})?$/',
    		
    		'dinheiro' => 'sometimes|regex:/^\d*(\.\d{1,2})?$/',
    	];
    	
    	return $rules;
    }

    protected function prepareForValidation()
    {
    	if(!$this->has('agencia_id'))
    		$this->merge(['agencia_id' => auth()->user()->agencia_id]);

    	if($this->has('maconha'))
    		$this->merge(['maconha' => floatToBd($this->maconha)]);

    	if($this->has('crack'))
    		$this->merge(['crack' => floatToBd($this->crack)]);

    	if($this->has('cocaina'))
    		$this->merge(['cocaina' => floatToBd($this->cocaina)]);

    	if($this->has('dinheiro'))
    		$this->merge(['dinheiro' => floatToBd($this->dinheiro)]);

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
    	$this->merge(['data' => getCarbonDate($this->data)]);
    }
}
