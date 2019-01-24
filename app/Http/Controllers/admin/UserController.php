<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	
	public function __construct()
    {
           $this->middleware('auth');
          
    }
    
    public function profile()
    {
        
        return view('admin.user.profile', array('user' => \Auth::user()));
    }

    public function edit($id)
    { 
    	$user = User::find($id);

    	request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request()->post('name');
        $user->email = request()->post('email');
        $user->password = bcrypt(request()->post('password'));

        $user->save();
        \Auth::logout();
        return redirect('/login');
        // return back();
    }
}
