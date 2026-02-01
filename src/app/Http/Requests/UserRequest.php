<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:30|confirmed',
        ];
    }

     public function messages()
    {
       return[
            'name.required'     => 'O campo nome é de preenchimento obrigatório.',
            'name.string'       => 'O campo nome deve ser um texto válido.',
            'name.min'          => 'O campo nome deve ter no mínimo 2 caracteres.',
            'name.max'          => 'O campo nome deve ter no máximo 255 caracteres.',

            'email.required'     => 'O campo e-mail é de preenchimento obrigatório.',
            'email.email'        => 'O campo e-mail deve ser um enderço de e-mail válido.',
            'email.unique'       => 'O e-mail informado já está em uso.',

            'password.required_if'  => 'O campo senha é de preenchimento obrigatório.',
            'password.min'       => 'A senha deve ter no mínimo :min caracteres.',
            'password.max'       => 'A senha deve ter no máximo :max caracetres.',
            'password.confirmed' => 'As senhas não coincidem.',
        ];
    }
}
