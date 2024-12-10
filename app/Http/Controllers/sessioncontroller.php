<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    //doc du lieu ng dung
    public function ctSessionData(request $request){
        if($request->session()->has("K23-CNT3_NguyenCongTung")){
            echo "<h2>". $request->session()->get("K23-CNT3_NguyenCongTung");
        }else{
            echo "<h2>Khong Co Du Lieu Trong Session</h2>";
        }
    }
    #luu du lieu session
    public function ctStoreSessionData(request $request){
        // luu
        $request->session()->put('K23-CNT3_NguyenCongTung','K23CN3-Nguyen Cong Tung-2310900051');
    }
    #xoa
    public function ctDeleteSessionData(request $request){
        $request->session()->forget('K23-CNT3_NguyenCongTung');
    }
}
