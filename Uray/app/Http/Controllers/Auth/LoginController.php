<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin() 
    {
        return view('Auth/login');
    }

    public function postLogin(Request $request) 
    {
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        $carts = $request->session()->get('carts') ?? collect();
        
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            $params = $request->only('email','password');     
            if( Auth::attempt($params)) {
                $level = auth()->user()->level;
                if($level == 1)
                    return redirect('/admin');
                else {
                    if($carts->count() > 0) 
                        return redirect('/order');                    
                    else
                        return redirect('/');
                }
            } 
            else {
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('/login');
            }
        }
    }
}
