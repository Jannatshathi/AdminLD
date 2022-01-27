<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{ 
    public function home(){
        return view('welcome');
    }
    public function reg(){
        return view('pages.registration');
    }

public function regpost(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'phone'=>'required| min:11|max:11'
        
    ]);
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'phone'=>$request->phone,
     ]);

     return redirect()->route('login')->with('message','Registration successful.');
}

    public function login(){
        return view('pages.login');
    }
    
    public function doLogin(Request $request)
    {

        $userInfo=$request->except('_token');
//dd($userInfo);
//dd(Auth::attempt($userInfo));

        if(Auth::attempt($userInfo)){
            return redirect()->route('home')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message','Loging out.');
    }

}
