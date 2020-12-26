<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
class LogoutController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }
		
	public function getLogout() {
		if(auth()->user()->level == 1) {
			Auth::logout();
			return redirect('login');
		}
		else {
			Auth::logout();
			return redirect('/');
		}
	}
}
