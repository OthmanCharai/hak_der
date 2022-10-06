<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerRequest extends FormRequest
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
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'partner_name'=>'required',
            'partner_username'=>'required',
            'partner_birth_day'=>'required',
            'partner_gender'=>'required',
            'partner_nationality'=>'required',
            'partner_sickness'=>'required',
            'birth_place'=>'required'
        ];
    }
}
