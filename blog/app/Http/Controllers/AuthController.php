<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('admin.login');
        }
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|email|max:50',
            'password' => 'required|min:8'
        ]);
        $email = $request->email;
        $password = $request->password;
        $remember = $request->has('remember');

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->intended('/');
        }
        
        return redirect('/user/login')->with(['error' => 'Username atau password salah !']);
        
    }

    public function showRegistForm(){
        return view('admin.regist');
    }

    public function register(Request $request)
    {
        // validate request data
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        // save into table
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // autologin
        Auth::loginUsingId($user->id);
        // redirect to home
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/user/login');
    }
}
