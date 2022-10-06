<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'birth_day' => ['required'],
            'gender' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'sickness' => ['required', 'string'],
            'approved_at' => [''],
            'address' => ['required', 'string'],
            'zip_code' => ['required', 'string'],
            'residence' => ['required', 'string'],
            'furnale_place' => ['required', 'string'],
            'gsm' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'mobile_number' => ['required', 'string'],
        ];
    }
}
