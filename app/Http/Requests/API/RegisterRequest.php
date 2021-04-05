<?php

namespace App\Http\Requests\API;

class RegisterRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|max:64',
            'gender' => 'required',
            'email' => 'required|email|max:64|' . Rule::unique('users', 'email')->where('email', request()->email),
            'password' => 'required|confirmed|min:6|max:32',
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
            'full_name.required' => 'Họ tên không được bỏ trống',
            'full_name.max' => 'Họ tên phải nhỏ hơn 32 kí tự',
            'email.required' => 'Email không được bỏ trống',
            'gender.required' => 'Giới tính không được bỏ trống',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Mật khẩu không được bỏ trống',
            'password.min' => 'Mật khẩu phải lớn hơn 6 kí tự',
            'password.max' => 'Mật khẩu phải nhỏ hơn 32 kí tự',
            'password.confirmed' => 'Nhập lại mật khẩu không khớp',
        ];
    }
}
