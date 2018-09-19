<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'Username' => 'required',
            'Email' => 'email|unique:users,email',
            'Password' => 'min:6|max:32',
            'RePassword' => 'same:Password',
            'Phone' => 'required',
            'Address' => 'required',
            'avatar' => 'required|mimes:jpeg,jpg,png',
            'role' => 'required',
        ];
    }
}
