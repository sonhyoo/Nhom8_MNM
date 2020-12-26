<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UserUpdateRequest;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        if(!$user) {
            abort(404);
        }
        return view('frontend.account.infor')->with([
            'user' => $user
        ]);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        
        $user = User::find($id);
        if(!$user){
            abort(404);
        }
        $fileName = $request->avatar->getClientOriginalName();
        $request->avatar->move('Uploads/avatar',$fileName);
        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'level' => 2,
                'avatar' => $fileName            
            ]);
        } 
        catch(Exception $e) {
            unlink('Uploads/avatar'.$fileName);
        }
        return redirect(route('account.index'));
    }
}
