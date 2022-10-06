<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

            'username' => ['required'],
            'birth_day' => ['required'],
            'gender' => ['required'],
            'nationality' => ['required'],
            'sickness' => ['required'],
            'approved_at' => [''],
            'address' => ['required'],
            'zip_code' => ['required'],
            'residence' => ['required'],
            'furnale_place' => ['required'],
            'partner_furnal_place' => ['required'],
            'phone_number' => ['required'],
            'mobile_number' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birth_place'=>['required'],
            'partner_name'=>'required',
            'partner_username'=>'required',
            'partner_birth_place'=>'required',
            'partner_birth_day'=>'required',
            'partner_gender'=>'required',
            'partner_nationality'=>'required',
            'partner_sickness'=>'required',
            'owner'=>'required',
            'account_number'=>'required'
        ];
    }
}
