@extends('admin.layout')
@push('css')
    <link href="{{asset('admin/assets/plugins/tinymce/skins/ui/oxide/skin.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/basic.css" />
    <style>
        .page-heading {
            margin: 20px 0;
            color: #666;
            -webkit-font-smoothing: antialiased;
            font-family: "Segoe UI Light", "Arial", serif;
            font-weight: 600;
            letter-spacing: 0.05em;
        }
        .modal-dialog{
            min-height:80% !important;
        }
        .modal-xl{
            align-items:flex-start !important;
        }
        #upload-dropzone .message {
            font-family: "Segoe UI Light", "Arial", serif;
            font-weight: 600;
            color: #0087F7;
            font-size: 1.5em;
            letter-spacing: 0.05em;
        }
        .dropzone {
            border: 2px dashed #0087F7;
            background: white;
            border-radius: 5px;
            min-height: 200px;
            padding: 90px 0 0 0;
            vertical-align: baseline;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
    <script>
        $(function (){

            tinymce.init({
                language:'vi',
                plugins: [
                    "image imagetools media",
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern"
                ],
                selector: "#product-description",
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback : function(callback, value, meta) {
                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                    var cmsURL = '{{route('anh.index')}}' + '?disabePartials=true&editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.openUrl({
                        url : cmsURL,
                        title : 'Chọn tệp',
                        width : x * 0.8,
                        height : y * 0.8,
                        resizable : "yes",
                        close_previous : "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }
            });
        })
    </script>

@endpush

@section('title')
    <title>Tạo mới truyện</title>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                <li class="breadcrumb-item "><a href="#">Truyện</a></li>
                <li class="breadcrumb-item active">Chương</li>
            </ul>
            <h1 class="page-header mb-0">Tạo mới chương</h1>
        </div>

    </div>
    <div class="card">
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <form action="{{route('chuong.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="ma_truyen" value="{{$truyen->ma_truyen}}">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="product-name">Truyện</label>
                                <input value="{{$truyen->ten}}" type="text" class="form-control"  readonly >
                            </div>
                            <div class="form-group">
                                <label for="product-name">Chương trước</label>
                                <input  value="{{ isset($truyen->chuong[0]) ? $truyen->chuong[0]->ten_chuong : ''}}" type="text" class="form-control" readonly >

                            </div>
                            <div class="form-group">
                                <label for="product-code">Tên chương</label>
                                <input name="ten_chuong" type="text" class="form-control" id="ten" >
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="product-description">Nội dung</label>
                                <textarea name="noi_dung" class="form-control" id="product-description" rows="30"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-default fileinput-button mr-2 mb-1">
                                    <i class="fa fa-fw fa-arrow-left"></i>
                                    <span>Huỷ</span>
                                </button>
                                <button class="btn btn-primary fileinput-button mr-2 mb-1">
                                    <i class="fa fa-fw fa-save"></i>
                                    <span>Lưu</span>
                                </button>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.anh.xem-truoc')
@endsection
