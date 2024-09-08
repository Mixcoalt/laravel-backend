<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class ReistroRequest extends FormRequest
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
            //
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->symbols()->numbers()
            ],
            'direction' => ['required', 'string', 'max:500'],
            'phone' => ['required', 'string' ]


        ];
    }

    public function messages(){
        return [
            'name' => 'El nombre es Obligastorio',
            'email.required' => 'El email es Obligatorio',
            'email.email' => 'El email no es valido',
            'email.unique' => 'El usuario ya esta registrado',
            'password.required' => 'El password debe contener al menos 8 caracteres, simbolo y numeros',
            'direction' => 'La direccion es Obligatoria',
            'phone' => 'El telefono es Obligatorio'

        ];
    }
}
