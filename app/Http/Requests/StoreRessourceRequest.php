<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRessourceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // dd('teste');
        return [
           'titre' => 'required|string',
           'description' => 'nullable|string',
           'cour_id'=>'required',
        ];
    }
}
