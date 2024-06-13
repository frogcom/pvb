<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleRequest extends FormRequest
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
            //
            'title' => ['required', 'string', 'max:255'],
            'total_places' => ['required', 'integer'],
            'available_places' => ['required', 'integer', 'lte:total_places'],
            'text' => ['required'],
            'categorie_id' => ['required', 'integer', 'exists:categories,id'],
            'file' => 'required|file|mimes:jpg,jpeg,png|max:2048'
        ];
    }
}
