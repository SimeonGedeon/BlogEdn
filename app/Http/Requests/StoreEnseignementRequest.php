<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnseignementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'contenu' => 'required|string',
            'categorie' => 'required|exists:categories,id',
            'img' => 'nullable|image|max:2048',
            'hastag' => 'nullable|string|max:255',
            'est_publie' => 'nullable|in:0,1',
        ];
    }
}
