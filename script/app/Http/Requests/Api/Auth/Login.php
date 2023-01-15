<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:100',
        ];
    }
    public function messages()
    {
        return [
            'email.email' => __('You need to provide valid email address.'),
            'email.exists' => __('Provided email is invalid.'),
            'password.min' => __('Password length should be 6.'),
            'password.max' => __('Password length should be less then 100.'),
            'password.required' => __('Password length should be less then 100.'),
            'email.required' => __('Email is required.'),
        ];
    }
}
