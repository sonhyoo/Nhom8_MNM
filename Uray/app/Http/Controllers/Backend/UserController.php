<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\CreateUserRequest;
use App\Http\Requests\Backend\User\UpdateUserRequest;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('backend.user.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    public function store(CreateUserRequest $request)
    {
        $fileName = $request->avatar->getClientOriginalName();
        $request->avatar->move('Uploads/avatar',$fileName);
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'address' => $request->address,
                'phone' => $request->phone,
                'level' => $request->level,
                'avatar' => $fileName            
            ]);
        } 
        catch(Exception $e) {
            unlink('Uploads/avatar'.$fileName);
        }
        return redirect(route('user.index'))->with('status', 'Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if(!$user){
            abort(404);
        }
        return view('backend.user.update')->with([
            'user' => $user
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
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
                'level' => $request->level,
                'avatar' => $fileName            
            ]);
        } 
        catch(Exception $e) {
            unlink('Uploads/avatar'.$fileName);
        }
        return redirect(route('user.index'))->with('status','Cập nhật thành công'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('user.index'))->with('status', 'Xóa thành công');
    }
}
