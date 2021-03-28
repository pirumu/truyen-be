@extends('admin.layout')
@push('css')
@endpush

@push('js')
    <script>
        $(function () {
            $('#cap-nhat-the-loai').modal('show');
        })
    </script>
@endpush

@section('title')
    <title>Thể loại</title>
@endsection

@section('content')
    <div class="modal" id="cap-nhat-the-loai"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cập nhật danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-create" action="{{route('danh-muc.update',$danhMuc->ma_danh_muc)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tên thể loại</label>
                            <input type="text" class="form-control" name="ten_danh_muc" value="{{$danhMuc->ten_danh_muc}}">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button onclick=" window.history.back();" class="btn btn-default fileinput-button mr-2 mb-1">
                        <i class="fa fa-fw fa-arrow-left"></i>
                        <span>Huỷ</span>
                    </button>
                    <button onclick="document.getElementById('form-create').submit()" class="btn btn-primary fileinput-button mr-2 mb-1">
                        <i class="fa fa-fw fa-save"></i>
                        <span>Lưu</span>
                    </button>

                </div>
            </div>
        </div>
    </div>

@endsection
