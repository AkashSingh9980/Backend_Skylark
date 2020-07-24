<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
// use DB;


class loginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        
        $credentials=$request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        }

        return redirect('login')->with('message','YOU FKN STUPID BISH');
    }

    public function logout(){
        Auth::logout();

        return redirect('login');
    }
    public function register(Request $request){

        $user = new User; 
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        // $request->fill([
        //     'password'=>Hash::make($request->newPassword)
        // ])->save();
        return redirect('login')->with('message','Login Now');
    }
}

