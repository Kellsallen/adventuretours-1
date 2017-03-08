<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
class AccountController extends Controller
{
    public function index(){
    return view('owner.index');
}
    public function account(){
        return view('owner.account');
    }
    public function signup(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect('/owner')->with('success','User Account created successfully.');
    }
    public function signin(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',
        ]);
        if (Auth::attempt(['email' =>$request->email, 'password' =>$request->password])) {
            return redirect('/dashboard');
        }
        else{
            return redirect()->back()->with('error','could not sign you in with those details!');
        }

    }
    //
}
