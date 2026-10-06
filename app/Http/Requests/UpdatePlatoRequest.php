<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePlatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'required',
                'string',
                'min:3',
                'max:100',
                Rule::unique('platos', 'nombre')->ignore($this->route('plato')),
            ],

            'precio' => [
                'required',
                'numeric',
                'min:1000',
            ],

            'descripcion' => [
                'required',
                'string',
                'min:10',
            ],

            'imagen' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ];
    }
}