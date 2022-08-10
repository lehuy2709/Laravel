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
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:10|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'username' => 'required|min:6|unique:users',
            'phone' => 'required|numeric|min:10',
            'address' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Fullname không được để trống !',
            'name.min' => 'Fullname tối thiểu phải 10 kí tự !',
            'name.max' => 'Fullname tối đa phải 25 kí tự !',
            'email.required' => 'Email không được để trống !',
            'email.unique' => 'Email này đã tồn tại !',
            'email.email' => 'Email không đúng định dạng email !',
            'password.required' => 'Password Không được để trống !',
            'password.min' => 'Password phải tối thiểu 6 kí tự !',
            'username.required' => 'Username Không được để trống !',
            'username.min' => 'Username phải tối thiểu 6 kí tự !',
            'username.unique' => 'Username đã tồn tại',
            'phone.required' => 'Phone Không được để trống !',
            'phone.min' => 'Phone tối thiểu là 10 kí tự',
            'phone.numeric' => 'Phone phải là số',
            'address.required' => 'Address bắt buộc nhập'


        ];
    }
}
