<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\TheLoai;
use App\Models\Truyen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TruyenController extends Controller
{
    private $theLoai;
    private $danhMuc;

    public function __construct()
    {
        $this->theLoai = TheLoai::all();
        $this->danhMuc = DanhMuc::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $truyen = Truyen::with('theloai')->withCount('chuong')
            ->when(request()->query('the_loai'), function ($query) {
                $query->whereIn('ma_the_loai',explode('-',request()->query('the_loai')));
            })
            ->when(request()->query('danh_muc'), function ($query) {
                $query->whereIn('ma_danh_muc', explode('-',request()->query('danh_muc')));
            })
            ->when(request()->query('ten_truyen'), function ($query) {
                $query->where('ten','like','%'.request()->query('ten_truyen').'%');
            })
            ->paginate(5);
        return view('admin.truyen.danh-sach', compact('truyen'))->with(['theLoai' => $this->theLoai, 'danhMuc' => $this->danhMuc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.truyen.tao-moi')->with(['theLoai' => $this->theLoai, 'danhMuc' => $this->danhMuc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['ten_url'] = Str::slug($data['ten']);
        $data['ngay_dang'] = now();
       $truyen = Truyen::create($data);

        return redirect(route('chuong.index').'?ma_truyen='.$truyen->ma_truyen);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truyen = Truyen::findOrFail($id);

        return view('admin.truyen.cap-nhat', compact('truyen'))->with(['theLoai' => $this->theLoai, 'danhMuc' => $this->danhMuc]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        $data['ten_url'] = Str::slug($data['ten']);
        $data['ngay_dang'] = now();
        $truyen = Truyen::where('ma_truyen',$id)->update($data);

        return redirect(route('chuong.index').'?ma_truyen='.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
