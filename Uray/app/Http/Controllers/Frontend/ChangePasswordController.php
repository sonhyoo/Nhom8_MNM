<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Frontend\User\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
class ChangePasswordController extends Controller
{
	public function index()
    {
    	return view('frontend.account.password');
    }
    public function update(ChangePasswordRequest $request, $id)
    {
        
        $user = User::find($id);
        if(!$user){
            abort(404);
        }

        if(Hash::check( $request->old_password, $user->password )) {

        	$user->update([
        		'password' => bcrypt($request->password)
        	]);

        	Session::flash('success', 'Đổi mật khẩu thành công!');
        	
        }
        else {
        	
        	Session::flash('error', 'Mật khẩu không đúng!');
        }
        return redirect('/changePassword');
    }
}
