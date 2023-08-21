<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "mobile" => "required|regex:/(09)[0-9]{9}/|unique:guests,mobile",
            "gender" => "required|in:male,female",
            "name" => "required|string",
            "withFamily" => "required|numeric"
        ];
    }
}
