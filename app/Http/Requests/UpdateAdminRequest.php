<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
        // dd($this->all());
        // $this->validate(rules: [
        //     'couver' => 'nullable|file|mimes:jpg,png|max:2048',
        //     'photo' => 'nullable|file|mimes:jpg,png|max:2048',
        // ]);
        return [
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone'=>'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'role_id'=>'required',
            'couver' => 'nullable|file|mimes:jpg,png|max:2048',
            'specialite' => 'nullable|string|max:255',
            'dateNaissance' => 'nullable|date',
            'photo' => 'nullable',
            'nemerodebadge' => 'nullable|string|max:255',
        ];
    }
}
