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
        $userId = $this->route('users');
        return [
            'name' => 'required',
            'email' => 'required|email|unique:user,email,' . ($userId ? $userId->id : null),
            'password' => 'required|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'Nescessário um email válido',
            'email.unique' => 'O e-mail já está cadastrado!',
            'password.required' => 'Campo senha é obrigatório',
            'password.min' => 'Senha deve ter no mínimo 6 caracteres',
        ];
    }
}
