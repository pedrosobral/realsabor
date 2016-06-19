<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCustomerRequest extends Request
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

    /**
     * Get the validation rules that apply to the request.
     * ref: laracasts.com
     * 		/discuss/channels/requests
     *   	/laravel-5-validation-request-how-to-handle-validation-on-update
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name'          => 'required',
                    'company_id'    => 'required',
                    'cpf'           => 'required|unique:customers|max:11',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name'          => 'required',
                    'company_id'    => 'required',
                    'cpf'           => 'required|max:11|unique:customers,cpf,'.$this->customer->id
                ];
            }
            default:break;
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'         => 'O NOME é obrigatório',
            'company_id.required'   => 'O nome da EMPRESA é obrigatório',
            'cpf.required'          => 'O CPF é obrigatório',
            'cpf.unique'            => 'CPF já usado por outro cliente',
        ];
    }
}
