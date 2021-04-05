<?php

namespace App\Http\Requests\API;

class LoginRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email không được bỏ trống',
            'email.email' => trans('Email không hợp lệ'),
            'password.required' => trans('Mật khẩu không được bỏ trống'),
        ];
    }
}
