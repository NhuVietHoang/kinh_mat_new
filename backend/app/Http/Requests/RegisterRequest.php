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
            'name'=>'required|unique:customers,name',
            'phone'=>'required|unique:customers,phone',
            'address'=>'required',
            'password'=>'required',
            'email'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'tên không được để trống',
            'name.unique'=>'tên này trùng cmnr',
            'address.required'=>'ko có nhà à',
            'phone.required'        =>'không nhập số điện thoại sao liên hệ dc??',
            'password.required'     =>'nhập mật khẩu vào kìa',
            'email.required'        =>'chưa nhập email kìa'
        ];
    }
}
