<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            // 'h-captcha-response' => ['hcaptcha'],
            'name'     => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'gender'   => ['required', 'string'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // 'h-captcha-response.hcaptcha' => 'Please verify that you are human.',
            'rand.required' => 'Hmm.. What are you doing?',
        ];
    }
}
