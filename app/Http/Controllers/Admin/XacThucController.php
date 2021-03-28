<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class XacThucController extends Controller
{

    public function __constructer()
    {
        $this->middleware('guest', ['except' => 'dangXuat']);
    }

    public function dangNhap(Request $req)
    {
        try {

            $credentials = $req->only('email','password');
            if(auth('admin')->attempt( $credentials,$req->get('ghi_nho_dang_nhap',false))){

                return redirect()->route('the-loai.index');

            }
            return back()->withErrors(['error' => 'Đăng nhập thất bại']);

        } catch(Exception $e) {
            throw $e;
            return back()->withErrors(['error' => 'Đăng nhập thất bại']);
        }
    }

    public function dangNhapForm() {
        return view('admin.xacthuc.dangnhap');
    }

    public function dangXuat() {
        auth()->logout();
        \request()->session()->flush();
        return redirect()->route('dangNhap');
    }
}
