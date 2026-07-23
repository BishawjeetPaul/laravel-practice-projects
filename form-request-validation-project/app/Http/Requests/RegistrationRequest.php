<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|MIN:10',
            'password' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name must be required...!',
            // 'email.required' => 'Email must be required...!',
            'password.required' => 'Password must be required...!'
        ];
    }

    public function attributes() {
        return [
            'email' => 'email address'
        ];
    }
}
