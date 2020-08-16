<?php

namespace App\Http\Requests\Api;

class UserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  =>  'required|unique:users',
            'password' =>  'required|alpha_dash|min:6',

            'verification_key'  =>  'required|string',
            'verification_code' =>  'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'verification_key'  =>  '短信验证码 key',
            'verification_code' =>  '短信验证码',
        ];
    }
}
