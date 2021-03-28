<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chuong;
use App\Models\Truyen;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ChuongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $truyen = Truyen::with('chuong','theloai','danhmuc')->firstWhere('ma_truyen',request()->get('ma_truyen'));
        if(!$truyen) return  back();
        return  view('admin.truyen.chuong.danh-sach',compact('truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $truyen = Truyen::with(['chuong' => function ($query) {
            $query->orderBy('ma_chuong', 'desc')->first();
        }])->firstWhere('ma_truyen',request()->get('ma_truyen'));
        return  view('admin.truyen.chuong.tao-moi',compact('truyen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['ten_url'] = Str::slug($data['ten_chuong']);
        $chuong = Chuong::create($data);

        return redirect(route('chuong.index').'?ma_truyen='.$chuong->ma_truyen);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $truyen = Truyen::with(['chuong' => function ($query) {
            $query->orderBy('ma_chuong', 'desc')->first();
        }])->firstWhere('ma_truyen',request()->get('ma_truyen'));
        $chuong = Chuong::findOrFail($id);
        return  view('admin.truyen.chuong.cap-nhat',compact('truyen','chuong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        $data['ten_url'] = Str::slug($data['ten_chuong']);
        $chuong = Chuong::where('ma_chuong',$id)->update($data);

        return redirect(route('chuong.index').'?ma_truyen='.$data['ma_truyen']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
