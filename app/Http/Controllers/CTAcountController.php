<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CTAcountController extends Controller
{
    //
    public function ctLogin(){
        return view('ctlogin');
    }
    //
    public function ctLoginSubmit(request $request){
        $validationData=$request->validate([
            'email' =>' required|email',
            'password'=>'required|min:6|max:16'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        $ctLoginSession =[
                'CTemail'=>$email,
                'CTpassword'=>$password
        ];
        $ct_json=json_encode($ctLoginSession);
        if($email=='congtung@gmail.com' &&$password=='123456'){
            $request->session()->put('K23-CNT3_NguyenCongTung',$email);
            return redirect('/');
        }
        return redirect()->back()->with('ct-error','loi dang nhap');
    }
    #xoa session logout
    public function ctlogout(request $request){
$request ->session()->forget('K23-CNT3_NguyenCongTung');
$request ->session()->flush();
echo "<h2>Dang Xuat Thanh Cong";
        return redirect()->back();
    }
}
