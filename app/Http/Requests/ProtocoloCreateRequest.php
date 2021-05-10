<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Validation\Validator;
use Lang;
use Alert;

class ProtocoloCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	return true;
    }

    public function attributes()
    {
    	return [

    		'origin_id'         => Lang::get('controller/protocolo.field_origin_id'),
    		'thematic_id'       => Lang::get('controller/protocolo.field_thematic_id'),
    		'user_cadastro_id' 	=> Lang::get('controller/protocolo.field_user_cadastro_id'),
    		'assunto_principal' => Lang::get('controller/protocolo.field_assunto_principal'),

    		'documento_tipo_id' => Lang::get('controller/protocolo.field_documento_tipo_id'),

    		'status'            => Lang::get('controller/protocolo.field_status'),
    	];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'origin_id'         => 'required|exists:origins,id',
            'thematic_id'       => 'required|exists:thematics,id',
            'documento_tipo_id' => 'required|exists:documento_tipos,id',
            'assunto_principal' => 'string|required|min:3',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        Alert::error(Lang::get('validation.show_error_sweet'))->persistent(true, false)->autoClose(config('sweetalert.timer'));
        parent::failedValidation($validator);
    }
}
