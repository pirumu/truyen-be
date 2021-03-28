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
            url: '{{route('photo.store')}}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            autoProcessQueue: true,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFilesize: 16,
            previewTemplate: document.querySelector('#preview').innerHTML,
            addRemoveLinks: true,
            dictRemoveFile: 'Xoá',
            dictFileTooBig: 'Tệp phải nhỏ hơn 16MB',
            timeout: 10000,
            init: function () {
                this.on("sending", function(file, xhr, formData){
                    formData.append("dir_upload", "products/all");
                });
            },
            success: function (file, done) {


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

                    var cmsURL = '{{route('photo.index')}}' + '?disabePartials=true&editor=' + meta.fieldname;
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
    <title>Tạo mới sản phẩm</title>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                <li class="breadcrumb-item active">Sản phẩm</li>
            </ul>
            <h1 class="page-header mb-0">Tạo mới sản phẩm</h1>
        </div>

    </div>
    <div class="card">
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <form>
                    <div class="row">

                        <div class="col-xl-6">

                            <div class="form-group">
                                <label for="product-code">Mã sản phẩm</label>
                                <input name="product_code" type="text" class="form-control" id="product-code" >
                            </div>
                            <div class="form-group">
                                <label for="product-name">Tên sản phẩm</label>
                                <input name="product_name" type="text" class="form-control" id="product-name" >
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="catgory-id-">Danh mục</label>
                                <select class="form-control" id="catgory-id" name="category_id">
                                    @for($i=1;$i<13;$i++)
                                        <option value="{{$i}}">{{$i}} tháng</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product-guarantee">Bảo hành </label>
                                <select class="form-control" id="product-guarantee" name="product_guarantee">
                                    @for($i=1;$i<13;$i++)
                                        <option value="{{$i}}">{{$i}} tháng</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="product-thumb">Ảnh sản phẩm</label>
                                <div  class="dropzone" id="upload-dropzone">
                                    <div class="dz-message">
                                        <div class="col-xs-8">
                                            <div class="message" style="text-align: center">
                                                Kéo thả tệp vào đây
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fallback">
                                        <input type="file" name="product_thumb" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="product-description">Mô tả</label>
                                <textarea name="product_description" class="form-control" id="product-description" rows="30"></textarea>
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
    @include('admin.anh.preview')
@endsection
