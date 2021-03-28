<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\TheLoai;
use App\Models\Truyen;
use Illuminate\Http\Request;

class TruyenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.jwt');

    }
    public function danhSach(Request $request) {

        try {
            return  Truyen::paginate(10);
        }catch (\Exception $e) {
            return [];
        }

    }

    public function danhGiaTruyen(Request $request) {

        try {
            return  Truyen::paginate(10);
        }catch (\Exception $e) {
            return [];
        }

    }

    public function binhLuanTruyen(Request $request) {

        try {
            return  Truyen::paginate(10);
        }catch (\Exception $e) {
            return [];
        }

    }

    public function yeuThichTruyen($id) {

        return auth('api')->user()->truyenYeuThich()->attach($id);
    }

    public function danhSachYeuThichTruyen(Request $request) {

        try {

            return auth('api')->user()->truyenYeuThich()->paginate(10);
        }catch (\Exception $e) {
            return [];
        }

    }

    public function danhMucTruyen(Request $request) {

        try {
            return DanhMuc::withCount('truyen')->paginate(10);
        }catch (\Exception $e) {
            return [];
        }

    }

    public function theLoaiTruyen(Request $request) {

        try {
            return TheLoai::withCount('truyen')->paginate(10);
        }catch (\Exception $e) {
            return [];
        }

    }
}
