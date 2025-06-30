<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenseeRequest extends FormRequest
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
            'titre' => 'required|string|max:255',
            'verset' => 'required|string|max:255',
            'contenu' => 'required|string',
            'exhortation' => 'nullable|string',
            'hashtags' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'est_publie' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'verset.required' => 'Le verset biblique est obligatoire.',
            'contenu.required' => 'Le contenu ne peut pas être vide.',
            'image.image' => 'Le fichier doit être une image.',
        ];
    }
}
