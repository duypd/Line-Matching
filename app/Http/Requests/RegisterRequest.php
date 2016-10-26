<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'username' =>'required|unique:users,username',
            'email'    => 'required||unique:users,email',
            'password' =>'required',
            'images'   =>'required'
        ];
    }
    public function message()
    {
        return [
        /*'username.required' =>'Please enter you username',
        'email.required' =>'Please enter you email',
        'password.required' =>'Please enter you password',
        'username.unique' =>'User exist',
        'email.unique' =>'Email exist',*/
        ];
    }
}
