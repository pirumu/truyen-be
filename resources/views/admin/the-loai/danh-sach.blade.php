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
                <li class="breadcrumb-item active">Thể loại</li>
            </ul>
            <h1 class="page-header mb-0">Danh sách thể loại truyện</h1>
        </div>
        <div class="ml-auto">
            <a href="{{route('the-loai.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Thêm mới thể loại</a>
        </div>
    </div>
    <div class="card">

        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Tên thể loại</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Số lượng truyện</th>
                            <th class="border-bottom-0 border-top-0 pt-0 pb-2">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($theLoai as $tl)
                        <tr>

                            <td>
                                <div class="d-flex align-items-center">

                                    <div class="ml-3">
                                        <a href="{{route('the-loai.show',$tl->ma_the_loai)}}">{{$tl->ten_the_loai}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="{{route('truyen.index').'?the_loai='.$tl->ma_the_loai }}">
                                    {{$tl->truyen_count}} truyện
                                </a>
                            </td>

                            <td class="align-middle">
                                <button data-tooltip="xxxx" type="button" class="btn btn-sm btn-primary" onclick="window.location.assign('{{route('the-loai.edit',$tl->ma_the_loai)}}')">
                                    <i class="fa fa-sm fa-fw fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="document.getElementById('xoa-the-loai-{{$tl->ma_the_loai}}').submit()">
                                    <form method="post" action="{{route('the-loai.destroy',$tl->ma_the_loai)}}" id="xoa-the-loai-{{$tl->ma_the_loai}}" style="display: none">
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
                {{ $theLoai->appends(request()->input())->render("pagination::default")  }}
            </div>
        </div>
    </div>
@endsection
