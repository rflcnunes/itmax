<?php

namespace App\Http\Requests\Machine;

use Illuminate\Foundation\Http\FormRequest;

class CreateMachineRequest extends FormRequest
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
            'code_machine' => 'required|string|max:10|unique:machines',
            'model' => 'required|string|max:30',
            'manufacturer' => 'required|string|max:30',
            'quantity' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'code_machine.required' => 'O campo "código da máquina" é obrigatório.',
            'type.required' => 'O campo "tipo" é obrigatório.',
            'model.required' => 'O campo "modelo" é obrigatório.',
            'manufacturer.required' => 'O campo "fabricante" é obrigatório.',
            'quantity.required' => 'O campo "quantidade" é obrigatório.',
            'code_machine.unique' => 'O código da máquina informado já está cadastrado.',
        ];
    }
}
