<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            //Rules
            'Email' => 'required|unique:PERSONA,Email',
            'Codigo' => 'required|unique:PERSONA,Codigo',
            'Password' => 'required|min:8',
            'Password_Confirmation' => 'required|same:password',
        ];
    }
}
