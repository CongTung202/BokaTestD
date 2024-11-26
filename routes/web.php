<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
#        tao trang web dau
Route::get("/hello",function() {
    return "<h1 style='color:hotpink;'>Helicopter</h1>";
});
#Chuyen Huong Trang Web Khi Truy Cap.
#Giong Animehay.tv va Quang Cao
route::redirect('/here','/there');
route::get('/there',function(){
    return "<h1>Redirect :here to there</h1>";
});
#lay mau trang web ben resources
route::get('/cong-tung',function(){
    return view('congtung');
});
# lay phan sau cua bokamaster lam id va in ra luon
route::get('bokamaster/{id}',function ($id){
    return '<h1>BokaChan '.$id;
});
# impossible ben tren
route::get('/post/{postID}/comment/{commentID}',function($postID,$commentID){
    return '<h1>Post: '.$postID.'<br>Comment: '.$commentID;
});
# controller index
route::get('/account',[AccountController::class,'index'])#->name('account.index')
;
#controller create
route::get('/account-create',[AccountController::class,'create']);
#controller show
Route::get('/account-show',[AccountController::class,'showData'])
;
#controller list
Route::get('/account-list',[AccountController::class,'list'])#->name('account.list')
;
Route::get('/account-getAll',[AccountController::class,'getAllAccount']);