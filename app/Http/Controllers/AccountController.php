<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller{

    public function index(){
        return "account controller;action idex;return string";
    }
    public function create(){
            return view("account-create");
    }
    public function showData(){
        $data=array('123456789','BokaChan');
        return view('account-list',compact('data'));
    }
    // account-list
public function list(){
    // dữ liệu
    $data = array(
    ["id"=>1,"UserName"=>"BokaChan","Password"=>"Boka1234","FullName"=>"Nguyen Cong Tung"],
    ["id"=>2,"UserName"=>"LeeSeen","Password"=>"LeeVanSeen","FullName"=>"Tung TT"]
    );
    // Trả về view và data
    return view('account-list',compact('data'));
    }
    public function getAllAccount()
{
$data = DB::table('account')->get();
return view('account-getAll',compact('data'));
}
}