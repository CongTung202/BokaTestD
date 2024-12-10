<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ctKhoaController extends Controller
{
    //doc du lieu
    public function ctGetAll(){
        //try van doc du lieu 
        $ctKhoas=DB::select("Select * from CTKHOA");
        //chuyen du lieu
        return view('ctkhoa.ctlist',['ctKhoas'=> $ctKhoas]);
    }
}
