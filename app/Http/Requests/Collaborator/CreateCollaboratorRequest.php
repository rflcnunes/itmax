<?php

namespace App\Http\Requests\Collaborator;

use Illuminate\Foundation\Http\FormRequest;

class CreateCollaboratorRequest extends FormRequest
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
            'role' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:collaborators',
            'cpf' => 'required|string|max:12|unique:collaborators',
            'phone' => 'required|string|max:11',
            'address' => 'required|string|max:150',
        ];
    }

    public function messages()
    {
        return [
            'role.required' => 'O campo "cargo" é obrigatório.',
            'name.required' => 'O campo "nome" é obrigatório.',
            'email.required' => 'O campo "e-mail" é obrigatório.',
            'cpf.required' => 'O campo "CPF" é obrigatório.',
            'phone.required' => 'O campo "telefone" é obrigatório.',
            'address.required' => 'O campo "endereço" é obrigatório.',
            'email.unique' => 'O e-mail informado já está cadastrado.',
            'cpf.unique' => 'O CPF informado já está cadastrado.',
            'email.email' => 'O e-mail informado não é válido.'
        ];
    }
}
