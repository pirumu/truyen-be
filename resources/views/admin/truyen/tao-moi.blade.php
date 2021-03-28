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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js" ></script>
    <script>
                 Dropzone.autoDiscover = false;
               $('#upload-dropzone').dropzone({
                   url: '{{route('anh.store')}}',
                   headers: {
                       'X-CSRF-TOKEN': '{{ csrf_token() }}'
                   },
                   autoProcessQueue: true,
                   uploadMultiple: false,
                   parallelUploads: 5,
                   maxFilesize: 16,
                   previewTemplate: document.querySelector('#preview').innerHTML,
                   addRemoveLinks: true,
                   dictRemoveFile: 'Xoá',
                   dictFileTooBig: 'Tệp phải nhỏ hơn 16MB',
                   timeout: 10000,
                   init: function () {
                       this.on("sending", function(file, xhr, formData){
                           formData.append("dir_upload", "truyen");
                       });

                   },
                   success: function (file, done) {
                      $('#anh-bia').val(done.path);
                   }
           })
    </script>
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
                <li class="breadcrumb-item active">Truyện</li>
            </ul>
            <h1 class="page-header mb-0">Tạo mới truyện</h1>
        </div>

    </div>
    <div class="card">
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <form method="post" action="{{route('truyen.store')}}">
                    @csrf
                    <div class="row">

                        <div class="col-xl-6">

                            <div class="form-group">
                                <label for="product-code">Tên truyện</label>
                                <input name="ten" type="text" class="form-control" id="ten" >
                            </div>
                            <div class="form-group">
                                <label for="product-name">Tên tác giả</label>
                                <input name="tac_gia" type="text" class="form-control" id="tac_gia" >
                            </div>
                            <div class="form-group">
                                <label for="product-name">Nguồn gốc</label>
                                <input name="xuat_xu" type="text" class="form-control" id="xuat_xu" >
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="catgory-id-">Thể loại</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        @foreach($theLoai as $k => $tl)
                                            @if($k % 2 === 0)
                                                <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                    <input  value="{{$tl->ma_the_loai}}" type="radio" class="custom-control-input" id="the-loai-{{$tl->ma_the_loai}}" name="ma_the_loai">
                                                    <label class="custom-control-label" for="the-loai-{{$tl->ma_the_loai}}">{{$tl->ten_the_loai}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($theLoai as $k => $tl)
                                            @if($k % 2 !== 0)
                                                <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                    <input  value="{{$tl->ma_the_loai}}" type="radio" class="custom-control-input" id="the-loai-{{$tl->ma_the_loai}}" name="ma_the_loai">
                                                    <label class="custom-control-label" for="the-loai-{{$tl->ma_the_loai}}">{{$tl->ten_the_loai}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label for="catgory-id-">Danh mục</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        @foreach($danhMuc as $k => $dm)
                                            @if($k % 2 === 0)
                                                <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                    <input value="{{$dm->ma_danh_muc}}" type="radio" class="custom-control-input" id="danh-muc-{{$dm->ma_danh_muc}}" name="ma_danh_muc">
                                                    <label class="custom-control-label" for="danh-muc-{{$dm->ma_danh_muc}}">{{$dm->ten_danh_muc}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($danhMuc as $k => $dm)
                                            @if($k % 2 !== 0)
                                                <div class="custom-control custom-checkbox pl-25px mr-n2">
                                                    <input  value="{{$dm->ma_danh_muc}}" type="radio" class="custom-control-input" id="danh-muc-{{$dm->ma_danh_muc}}" name="ma_danh_muc">
                                                    <label class="custom-control-label" for="danh-muc-{{$dm->ma_danh_muc}}">{{$dm->ten_danh_muc}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <input type="hidden" name="anh_bia" id="anh-bia">
                                <label for="product-thumb">Ảnh bìa</label>
                                <div  class="dropzone" id="upload-dropzone">
                                    <div class="dz-message">
                                        <div class="col-xs-8">
                                            <div class="message" style="text-align: center">
                                                Kéo thả tệp vào đây
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fallback">
{{--                                        <input type="file" name="anh_bia" >--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="product-description">Giới thiệu truyện</label>
                                <textarea name="gioi_thieu_truyen" class="form-control" id="product-description" rows="30"></textarea>
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
