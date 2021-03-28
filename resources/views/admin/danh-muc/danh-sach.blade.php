@extends('admin.layout')
@push('css')
@endpush

@push('js')
@endpush

@section('title')
    <title>Thể loại</title>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                <li class="breadcrumb-item active">Danh mục</li>
            </ul>
            <h1 class="page-header mb-0">Danh sách danh mục truyện</h1>
        </div>
        <div class="ml-auto">
            <a href="{{route('danh-muc.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Thêm mới danh muc</a>
        </div>
    </div>
    <div class="card">

        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Tên danh mục</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Số lượng truyện</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhMuc as $tl)
                        <tr>

                            <td>
                                <div class="d-flex align-items-center">

                                    <div class="ml-3">
                                        <a href="{{route('danh-muc.edit',$tl->ma_danh_muc)}}">{{$tl->ten_danh_muc}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="{{route('truyen.index').'?danh_muc='.$tl->ma_danh_muc }}">
                                    {{$tl->truyen_count}} truyện
                                </a>
                            </td>

                            <td class="align-middle">
                                <button data-tooltip="xxxx" type="button" class="btn btn-sm btn-primary" onclick="window.location.assign('{{route('danh-muc.edit',$tl->ma_danh_muc)}}')">
                                    <i class="fa fa-sm fa-fw fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="document.getElementById('xoa-the-loai-{{$tl->ma_danh_muc}}').submit()">
                                    <form method="post" action="{{route('danh-muc.destroy',$tl->ma_danh_muc)}}" id="xoa-the-loai-{{$tl->ma_danh_muc}}" style="display: none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <i class="fa fa-sm fa-fw fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $danhMuc->appends(request()->input())->render("pagination::default")  }}
            </div>
        </div>
    </div>
@endsection
