<?php

namespace App\Http\Requests\Api;

class VerificationCodeRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' =>  [
                'required',
                'regex:/^\d{11}$/',
                'unique:users',
            ],

        ];
    }
}
