<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamenRequest extends FormRequest
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
            'date-examen' => 'required|date',
            'heure-debut' => 'required|date_format:H:i',
            'heure-fin' => 'required|date_format:H:i|after:heure-debut',
            'duree' => 'required|integer|min:1',
            'cours_id' => 'required|exists:cours,id',
        ];
    }
}
