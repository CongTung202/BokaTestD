<?php

use App\Http\Controllers\ctGuestController;
use App\Http\Controllers\ctHoaDonController;
use App\Http\Controllers\ctKhachHangController;
use App\Http\Controllers\ctLoaiSanPhamController;
use App\Http\Controllers\ctLoginController;
use App\Http\Controllers\ctQuanTriController;
use App\Http\Controllers\ctSanPhamController;
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
    return view('welcome')->name('home');
});

#dangnhap dangky dangxuat
Route::get('/ctAdmin/ct-register', function () {return view('ctLogIn.Register');})->name('CongTung.Register');
Route::post('/ctAdmin/ct-register', [ctLoginController::class, 'ctRegister']);
Route::get('/ctAdmin/ct-login', function () {return view('ctLogIn.Login');})->name('CongTung.Login');
Route::post('/ctAdmin/ct-login', [ctLoginController::class, 'ctLoginSubmit']);
Route::post('/ctAdmin/ct-logout', [ctLoginController::class, 'ctLogout'])->name('CongTung.Logout');
#end dangnhap dangky dangxuat

#check cokkie de xem da dang nhap hay chuachua
Route::middleware(['check.cookie'])->group(function () {
   #Loai San Pham
route::get('/ctAdmin',[ctLoaiSanPhamController::class,'ctHome'])->name('CongTung.Home');
route::get('/ctAdmin/ct-list',[ctLoaiSanPhamController::class,'ctList'])->name('CongTung.List');
route::get('/ctAdmin/ct-create',[ctLoaiSanPhamController::class,'ctCreate'])->name('CongTung.Create');
route::post('/ctAdmin/ct-create',[ctLoaiSanPhamController::class,'ctCreateSubmit'])->name('CongTung.Create');
route::get('/ctAdmin/ct-edit/{id}',[ctLoaiSanPhamController::class,'ctEdit'])->name('CongTung.Edit');
route::post('/ctAdmin/ct-edit/{id}',[ctLoaiSanPhamController::class,'ctEditSubmit'])->name('CongTung.EditSubmit');
route::get('/ctAdmin/ct-delete/{id}',[ctLoaiSanPhamController::class,'ctDelete'])->name('CongTung.Delete');
route::get('/ctAdmin/ct-view/{id}',[ctLoaiSanPhamController::class,'ctView'])->name('CongTung.View');
#end Loai San Pham
# San Pham
route::get('/ctAdmin/SanPham/ct-list',[ctSanPhamController::class,'ctList'])->name('CongTung.SanPham.List');
route::get('/ctAdmin/SanPham/ct-create',[ctSanPhamController::class,'ctCreate'])->name('CongTung.SanPham.Create');
route::post('/ctAdmin/SanPham/ct-create',[ctSanPhamController::class,'ctCreateSubmit'])->name('CongTung.SanPham.Create');
route::get('/ctAdmin/SanPham/ct-create',[ctLoaiSanPhamController::class,'ctPutToList'])->name('CongTung.Foreign.Key');
route::get('/ctAdmin/SanPham/ct-edit/{id}',[ctSanPhamController::class,'ctEdit'])->name('CongTung.SanPham.Edit');
route::post('/ctAdmin/SanPham/ct-edit/{id}',[ctSanPhamController::class,'ctEditSubmit'])->name('CongTung.SanPham.EditSubmit');
route::get('/ctAdmin/SanPham/ct-delete/{id}',[ctSanPhamController::class,'ctDelete'])->name('CongTung.SanPham.Delete');
#end Loai San Pham
# Khach 
route::get('/ctAdmin/Khach/ct-list',[ctKhachHangController::class,'ctList'])->name('CongTung.KhachHang.List');
Route::get('/ctAdmin/Khach/ct-create', [ctKhachHangController::class, 'ctCreate'])->name('CongTung.KhachHang.Create');
Route::post('/ctAdmin/Khach/ct-create', [ctKhachHangController::class, 'ctCreateSubmit'])->name('CongTung.KhachHang.CreateSubmit');
route::get('/ctAdmin/Khach/ct-view/{id}',[ctKhachHangController::class,'ctView'])->name('CongTung.Khach.View');
route::get('/ctAdmin/Khach/ct-edit/{id}',[ctKhachHangController::class,'ctEdit']);
route::post('/ctAdmin/Khach/ct-edit/{id}',[ctKhachHangController::class,'ctEditSubmit'])->name('CongTung.Khach.EditSubmit');

#End Khach

#admin
route::get('/ctAdmin',[ctQuanTriController::class,'ctBoxHome']);
route::get('/ctAdmin/Admin/ct-list',[ctQuanTriController::class,'ctList'])->name('CongTung.Admin.List');
route::get('/ctAdmin/Admin/ct-list/{id}',[ctQuanTriController::class,'ctDelete'])->name('CongTung.Admin.Delete');
route::get('/ctAdmin/Admin/ct-edit/{id}',[ctQuanTriController::class,'ctEdit'])->name('CongTung.Admin.Edit');
route::post('/ctAdmin/Admin/ct-edit/{id}',[ctQuanTriController::class,'ctEditSubmit'])->name('CongTung.Admin.EditSubmit');
route::get('/ctAdmin/Admin/ct-create',[ctQuanTriController::class,'ctAdmin'])->name('CongTung.Khach.View');
#end admin
#hoadon
route::get('/ctAdmin/HoaDon/ct-list',[ctHoaDonController::class,'ctList'])->name('CongTung.HoaDon');
#endHoaDon
});
#end check cookie
#guest
route::get('ctGuest/Home',function(){return view('ctGuest.ct-home');});
route::get('ctGuest/Home',[ctGuestController::class,'ctList'])->name('CongTung.Guest.Home');
route::get('/ctGuest/Introduction',[ctGuestController::class,'ctIntroduction']);
route::get('/ctGuest/SanPham',[ctGuestController::class,'ctListSanPham'])->name('CongTung.Guest.SanPham');
Route::get('/ctGuest/ct-login', function () {return view('ctLogIn.LoginGuest');})->name('CongTung.Guest.Login');
Route::post('/ctGuest/ct-login', [ctKhachHangController::class, 'ctLoginSubmitGuest']);
Route::get('/ctGuest/ct-create', [ctKhachHangController::class, 'ctCreatewithGuest'])->name('CongTung.Guest.Create');
Route::post('/ctGuest/ct-create', [ctKhachHangController::class, 'ctCreateSubmitwithGuest'])->name('CongTung.Guest.CreateSubmit');
route::post('/ctGuest/ct-Logout',[ctKhachHangController::class,'ctLogoutwithGuest'])->name('CongTung.Guest.Logout');
#end Guest
