<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6|max:100',
            'role_id' => 'required|numeric|exists:roles,id',
        ];
    }
    public function messages()
    {
        return [
            'email.email' => __('You need to provide valid email address.'),
            'email.unique' => __('Provided email is already taken.'),
            'password.min' => __('Password length should be 4.'),
            'password.max' => __('Password length should be less then 100.'),
            'password.required' => __('Password length should be less then 100.'),
            'role_id.required' => __('Select the role'),
            'role_id.number' => __('Selected role should be number'),
            'role_id.exists' => __('Selected role is invalid'),
        ];
    }
}
