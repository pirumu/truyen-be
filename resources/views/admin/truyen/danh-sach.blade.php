@extends('admin.layout')
@push('css')
@endpush

@push('js')
    <script>
        $(function () {
            $('#loc').on('click', function () {
                const danh_muc_arr = [];
                const the_loai_arr = [];
                $('.danh-muc:checked').each(function () {
                    danh_muc_arr.push($(this).val());
                });
                $('.the-loai:checked').each(function () {
                    the_loai_arr.push($(this).val());
                });
                const danh_muc = {
                    key: 'danh_muc',
                    value: danh_muc_arr.join('-')
                };
                const the_loai = {
                    key: 'the_loai',
                    value: the_loai_arr.join('-')
                };
                const ten_truyen = {
                    key: 'ten_truyen',
                    value: $('.ten-truyen').val()
                };
                const url = window.location.search;
                const urlParams = new URLSearchParams(url);

                [danh_muc, the_loai, ten_truyen].forEach(q => {
                    if (q.value) {
                        urlParams.set(q.key, q.value);
                    } else {
                        urlParams.delete(q.key);
                    }
                })
                window.location.search = urlParams;

            })
        });
    </script>
@endpush

@section('title')
    <title>Trang quản trị</title>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                <li class="breadcrumb-item active">Truyện</li>
            </ul>
            <h1 class="page-header mb-0">Danh sách truyện</h1>
        </div>
        <div class="ml-auto">
            <a href="{{route('truyen.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i>
                Thêm mới truyện</a>
        </div>
    </div>
    <div class="card">
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <div class="input-group mb-4">
                    <div class="col-md-12">
                        <h4>Bộ lọc</h4>
                    </div>
                    <div class="col-md-12">
                        <label>Danh mục</label><br/>
                        @foreach($danhMuc as $k => $dm)
                            <div style="display: inline-block;padding-right: 10px"
                                 class="custom-control custom-checkbox pl-25px mr-n2">
                                <input
                                    {{ in_array($dm->ma_danh_muc,explode('-',request()->get('danh_muc'))) ? 'checked' :''}} value="{{$dm->ma_danh_muc}}"
                                    type="checkbox" class="danh-muc custom-control-input"
                                    id="danh-muc-{{$dm->ma_danh_muc}}" name="ma_danh_muc">
                                <label class="custom-control-label"
                                       for="danh-muc-{{$dm->ma_danh_muc}}">{{$dm->ten_danh_muc}}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-12">
                        <label>Thể loại</label><br/>
                        @foreach($theLoai as $k => $tl)
                            <div style="display: inline-block;padding-right: 10px"
                                 class="custom-control custom-checkbox pl-25px mr-n2">
                                <input
                                    {{  in_array($tl->ma_the_loai,explode('-',request()->get('the_loai'))) ? 'checked' :''}} value="{{$tl->ma_the_loai}}"
                                    type="checkbox" class="the-loai custom-control-input"
                                    id="the-loai-{{$tl->ma_the_loai}}" name="ma_the_loai">
                                <label class="custom-control-label"
                                       for="the-loai-{{$tl->ma_the_loai}}">{{$tl->ten_the_loai}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="input-group mb-4">

                    <div class="flex-fill position-relative">
                        <div class="input-group">
                            <div class="input-group-prepend position-absolute top-0 bottom-0"
                                 style="z-index: 1020;">
                            <span class="input-group-text bg-none border-0 pr-0">
                                <i class="fa fa-search opacity-5"></i>
                            </span>
                            </div>
                            <input value="{{request()->get('ten_truyen')}}" type="text"
                                   class="ten-truyen form-control pl-35px" placeholder="Tên truyện" name="ten-truyen"/>
                            <button id='loc' style="border-top-left-radius: 0; border-bottom-left-radius: 0;"
                                    class="btn btn-primary">Lọc
                            </button>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Truyện</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Số chương</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Thể loại</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Danh mục</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($truyen as $t)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="width-60 height-60 bg-gray-100 d-flex align-items-center justify-content-center">
                                            <img class="mw-100 mh-100" src="{{asset($t->anh_bia)}}"/>
                                        </div>
                                        <div class="ml-3">
                                            <a href="{{route('chuong.index').'?ma_truyen='.$t->ma_truyen}}">{{$t->ten}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle"><a href="{{route('chuong.index').'?ma_truyen='.$t->ma_truyen}}">{{$t->chuong_count}}</a></td>
                                <td class="align-middle">{{$t->theloai->ten_the_loai}}</td>
                                <td class="align-middle">{{$t->danhmuc->ten_danh_muc}}</td>
                                <td class="align-middle">
                                    <button data-tooltip="xxxx" type="button" class="btn btn-sm btn-primary"
                                            onclick="window.location.assign('{{route('truyen.edit',$t->ma_truyen)}}')">
                                        <i class="fa fa-sm fa-fw fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger">
                                        <i class="fa fa-sm fa-fw fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $truyen->appends(request()->input())->render("pagination::default")  }}
            </div>
        </div>
    </div>
@endsection
