<?php
namespace App\Http\Controllers;
use Illuminate\http\request;
class ProductController extends Controller{
    public function index(){
        $animal=array("Cho","Meo","Ga","Bo","Heo","De","Cuu");
        return view('welcome',compact('animal'));
    }
}