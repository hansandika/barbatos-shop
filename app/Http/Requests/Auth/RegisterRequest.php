<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @param string $name
     * @param string $email
     * @param string $password 
     * @param string $confirm-password
     * @param string $gender (male / female)
     * @param date dob
     * @param int country
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'alpha_num'],
            'confirm-password' => ['required', 'same:password'],
            'gender' => ['required', 'in:male,female'],
            'dob' => ['required', 'date', 'before:today', 'after:1900-01-01'],
            'country' => ['required'],
        ];
    }
}
