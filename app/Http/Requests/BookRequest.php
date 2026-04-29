<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;


class BookRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titolo' => 'required|string|min:3|max:255',
            'autore' => 'required|string|min:3|max:255',
            'published_year' => 'required|numeric',
            'img' => 'required|image',
            
        ];
    }

    public function messages(): array
    {
        return [
            'titolo.required' => 'Il campo titolo è obbligatorio.',
            'titolo.min' => 'Il titolo deve avere almeno 3 caratteri.',
            'autore.required' => 'Il campo autore è obbligatorio.',
            'autore.min' => 'L\'autore deve avere almeno 3 caratteri.',
            'published_year.required' => 'Il campo anno di pubblicazione è obbligatorio.',
            'published_year.numeric' => 'L\'anno di pubblicazione deve essere un numero.',
            'img.required' => 'Il campo immagine è obbligatorio.',
            'img.image' => 'Il file deve essere un\'immagine.',
        ];
}

}
