<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           
            'document' => 'required|file|mimes:pdf,doc,docx',
            'ressource_id'=>'required|integer',
        ];
    }
}
