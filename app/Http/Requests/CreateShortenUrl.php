<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShortenUrl extends FormRequest
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
            'original_url' => ['required', 'url'],
            'expires_at' => ['nullable', 'date', 'after:now'],
        ];
    }
    public function messages()
    {
        return [
            'original_url.required' => 'The URL to be shortened field is required',
            'original_url.url' => "The URL to be shortened field must be a valid URL.",
            'expires_at.date' => 'The expiration time field is required',
            'expires_at.after' => "The expiration date and time must be in the future."
        ];
    }
}
