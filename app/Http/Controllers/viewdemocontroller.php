<?php
namespace App\Http\Controllers;
use illuminate\http\Request;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\View;


class viewdemocontroller extends Controller{
    public function ctview4(){
        return view('bokacon.viewcontroller')
        ->with('name','Boka')
        ->with('primary','Boka Do Not Master');
    }
    public function ctview5(){
        $info ="Boka Chan Lord The Best Server";
        $emp=array(
            "Name"=>"Nguyen Cong Tung",
            "Email"=>"nct30000@gmail.com",
            "Phone"=>"0987654321"
        );
        if(View::exists("bokacon.view5")){
            return view('bokacon.view5',compact('info','emp'));
        }else{
            return "Khong Ton Tai View 5";
        }
    }
}