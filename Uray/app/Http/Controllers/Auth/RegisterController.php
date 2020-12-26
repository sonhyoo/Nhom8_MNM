<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\User\CreateUserRequest;
use Session;

class RegisterController extends Controller
{

    use RegistersUsers;
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRegister() 
    {
        return view('Auth.register');
    } 


    protected function validator(array $data)
    {
        return Validator::make($data,
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'phone' => 'required|size:10|unique:users',
                'address' => 'required'
            ],
            [
                'name.required' => 'Họ và tên là trường bắt buộc',
                'name.max' => 'Họ và tên không quá 255 ký tự',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email không quá 255 ký tự',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không đúng',
                'phone.required' => 'Số điện thoại không được để trống',
                'phone.unique' => 'Số điện thoại đã tồn tại',
                'phone.size' => 'Số điện thoại phải 10 kí tự',
                'address.required' => 'Địa chỉ không được để trống'
            ]
        );
    }
    public function postRegister(Request $request) {
        $allRequest  = $request->all(); 
        $validator = $this->validator($allRequest);     
        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        } else {   
            if( $this->create($allRequest)) {
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('/');
            } else {
                Session::flash('error', 'Đăng ký thành viên thất bại!');
                return redirect('register');
            }
        }
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address' => $data['address'],
            'phone' => $data['phone'],
            'level' => 2,
            'avatar' => ''           
        ]);
    }
}
