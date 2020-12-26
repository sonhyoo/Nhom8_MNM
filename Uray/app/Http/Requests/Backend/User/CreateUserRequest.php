<?php

namespace App\Http\Requests\Backend\User;
use Illuminate\Foundation\Http\FormRequest;
use Validator;
class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:5|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:8',
            'phone' => 'required|size:10|unique:users',
            'address' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'name.max' => 'Tên chỉ tối đa 200 kí tự',
            'name.min' => 'Tên tối thiểu 5 kí tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password tối thiểu 6 kí tự',
            'password.max' => 'Password tối đa 8 kí tự',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.size' => 'Số điện thoại phải 10 kí tự',
            'address.required' => 'Địa chỉ không được để trống'
        ];
    }
}
