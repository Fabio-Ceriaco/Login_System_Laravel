<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'text-user' => ['required', 'email'],
            'text-password' => ['required', 'min:5', 'max:20'],
        ];
    }

    //================================================================
    public function messages()
    {

        return [
            'text-user.required' => 'O email é de preenchimento obrigatório.',
            'text-user.email' => 'O campo Email tem que ser um email válido.',
            'text-password.required' => 'A password é de preenchimento obrigatório.',
            'text-password.min' => 'A password deve conter no minimo :min caracteres.',
            'text-password.max' => 'A password não pode conter mais de :max caracteres.',
        ];
    }
}
