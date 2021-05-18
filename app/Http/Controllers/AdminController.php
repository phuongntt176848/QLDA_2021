<?php

namespace App\Http\Controllers;

use App\Models\phongban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function getIndexAdmin(){
        return view('admin.dashboard.dashboard');
    }

    public function getNhanvien(){
        return view('admin.nhanvien.nhanvien');
    }
    
    public function getPhongBan(){
        $phongbans=phongban::get();

        return view('admin.tochuc.phongban',['phongbans'=>$phongbans]);
    }

    public function storePhongBan(Request $request){
        $this->validate($request,[
         'sdt'=>'required|digits:10'
        ],[
            'sdt.digits'=>'Số điện thoại phải là số có 10 chữ số'
        ]);
        $phongban = new phongban();
        $phongban->Ten = $request->Ten;
        $phongban->DiaChi = $request->DiaChi;
        $phongban->sdt = $request->sdt;
        echo $phongban->save();
        return redirect()->route('tochuc.phongban');

    }
    

}
