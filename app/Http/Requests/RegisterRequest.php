<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'phone'=> 'required|unique:users,phone',
            'password'=> 'required|min:6|required_with:confirmed',

        ];
    }
}
