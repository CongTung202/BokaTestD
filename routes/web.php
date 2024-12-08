<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use app\Http\Controllers\viewcontroller;
use App\Http\Controllers\viewdemocontroller;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
route::get('/',[ProductController::class,'index']);
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
#view name
route::get('/helloo',function(){
    return view('congtung',['name'=>'bokachangaoshiette']);
});
# view thu muc con
route::get('/bokacon',function(){
    return view('bokacon.adminct',['name'=>'Boka Con Ne Ke']);
});
#view 4
route::get('/bokacha',[viewdemocontroller::class,'ctview4']);
#view5
route::get("/view5",[viewdemocontroller::class,'ctview5']);
#view 6
route::get('/view6',function(){
    return view('bokacon.view6');
});
#view1
route::get('/view1',function(){
    return view('view1',['name'=>'Boka Chan']);
});
#view2
route::get('/view2',function(){
    return view('view2',['name'=>'BokaChan Ei',
    'arr'=>[1,5,2,3,0,9],]);
});
#view3
route::get('/view3',function(){
    return view('view3',['name'=>['CongTung','BokaChan','RaidenEI','BoCon'],
                                        'arr'=>[2,4,6,3,1,5],
                                    'users'=>[],]);
});
#test
route::get('/test',function(){
    return view('test1header');
});
#Template Blade Layout
Route::get('/home',function(){
    return view('index');
    });
    Route::get('/about-us',function(){
    return view('about');
    });
    Route::get('/contact',function(){
    return view('contact');
    });
route::get('/login',[LoginController::class,'index'])->name('login.submit');
route::post('/login',[LoginController::class,'LoginSubmit']);
