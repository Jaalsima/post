<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10|max:400'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Debes darle un título al post.',
            'title.min' => 'Agrega un título que contenga al menos 5 caracteres.',
            'title.max' => 'Este título supera la cantidad máxima de 255 caracteres.',
            'content.required' => 'El contenido del post no puede estar vacío.',
            'content.min' => 'Agrega un contenido que contenga al menos 10 caracteres.',
            'content.max' => 'Este título supera la cantidad máxima de 400 caracteres.',
        ];
    }
}
