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
    #chitietkhoa
    public function ctGetKhoa($makhoa){
        $khoa=db::select("select * from ctkhoa where ctmakhoa=?",[$makhoa])[0];
        return view('ctkhoa.ctdetail',['khoa'=>$khoa]);
    }
    #edit -get
    public function ctEdit($makhoa){
        $khoa=db::select("select * from ctkhoa where ctmakhoa=?",[$makhoa])[0];
        return view('ctkhoa.ctedit',['khoa'=>$khoa]);
    }# edit submit
    public function ctEditSubmit(request $request){
        //day du lieu tren form sua
        $makhoa =$request->input('CTMAKHOA');
        $tenkhoa=$request->input('CTTENKHOA');
        DB::update("UPDATE CTKHOA SET CTTENKHOA=? where CTMAKHOA=?",[$tenkhoa,$makhoa]);
        return redirect('/khoas');
    }
    public function ctDeleteSubmit($makhoa){
        // lay ma de xoa
        $makhoa= DB::delete("DELETE FROM CTKHOA WHERE CTMAKHOA=?",[$makhoa]);
        return redirect('/khoas')->with('success','xoa thanh cong');
    }
    # them moi databases chuyen huong trang
    public function ctInsert(){
        return view('ctkhoa.ctadd');
    }
    // Create
public function ctCreateSubmit(Request $request)
{
    $request->validate([
        'CTMAKHOA'=>'required|max:2'
        ]
    );
DB::insert("INSERT INTO CTKHOA(CTMAKHOA,CTTENKHOA) values(?,?)",
 [$request->CTMAKHOA,$request->CTTENKHOA]);
return redirect('/khoas');
}

}
