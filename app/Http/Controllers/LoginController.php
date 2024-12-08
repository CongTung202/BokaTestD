<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LoginController extends Controller{

    public function index(){
        return view('login');
    }
    public function LoginSubmit(request $request){
        $validationData=$request->validate([
            'email' =>' required|email',
            'password'=>'required|min:6|max:16'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        return "email:".$email."Password".$password;
    }
}