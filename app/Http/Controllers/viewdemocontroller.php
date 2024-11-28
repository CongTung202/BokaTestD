<?php
namespace App\Http\Controllers;
use illuminate\http\Request;
class viewdemocontroller extends Controller{
    public function ctview4(){
        return view('bokacon.viewcontroller')
        ->with('name','Boka')
        ->with('primary','Boka Do Not Master');
    }
}