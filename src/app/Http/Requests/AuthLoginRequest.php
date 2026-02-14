<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

     public function messages()
    {
       return[

            'email.required'     => 'O campo e-mail é de preenchimento obrigatório.',
            'email.email'        => 'O campo e-mail deve ser um enderço de e-mail válido.',

            'password.required'  => 'O campo senha é de preenchimento obrigatório.',
        ];
    }
}
