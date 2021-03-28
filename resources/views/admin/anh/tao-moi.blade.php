@extends('admin.layout')
@push('css')
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
        #from-upload-dropzone .message {
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
            min-height: 600px;
            padding: 90px 0 0 0;
            vertical-align: baseline;
        }
    </style>
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js" ></script>
    <script>
            Dropzone.autoDiscover = false;
           const myDropzone = new Dropzone("#from-upload-dropzone", {
               autoProcessQueue: false,
               uploadMultiple: true,
               parallelUploads: 5,
               maxFilesize: 16,
               previewTemplate: document.querySelector('#preview').innerHTML,
               addRemoveLinks: true,
               dictRemoveFile: 'Xoá',
               dictFileTooBig: 'Tệp phải nhỏ hơn 16MB',
               timeout: 10000,
               init: function () {
                   $('#upload-now').on("click", () => {
                       $('#dir-upload').val($('#dir').val());
                       this.processQueue();
                   });
               },
               success: function (file, done) {
                   window.location.assign('{{route('anh.index')}}');
               }
           });

           $(function () {
               $('#modalUploadPhoto').modal('show');

               $('#modalUploadPhotoClose').on('click',function () {

                   window.location.assign('{{route('anh.index')}}');
               });
           })


    </script>
@endpush
@section('content')
    <div class="modal modal-cover fade" id="modalUploadPhoto"  data-backdrop="static" data-keyboard="false">
        <div class="modal-header">
            <button type="button" class="close" id="modalUploadPhotoClose">
                <span>×</span>
            </button>
        </div>
        <div class="modal-dialog modal-xl"  >

            <div class="modal-content">
                <form method="post" action="{{route('anh.store')}}"
                      enctype="multipart/form-data" class="dropzone" id="from-upload-dropzone">
                    @csrf
                    <input type="hidden" id="dir-upload" name="dir_upload" value="">
                    <div class="dz-message">
                        <div class="col-xs-8">
                            <div class="message" style="text-align: center">
                                Kéo thả tệp vào đây
                            </div>
                        </div>
                    </div>
                    <div class="fallback">
                        <input type="file" name="file" multiple>
                    </div>
                </form>
                <div class="form-group">
                    <label for="dir">Chọn thư mục tải lên</label>
                    <select class="form-control" id="dir" name="dir">
                        @foreach($dir as $k => $d)
                                <option value="{{$k}}">{{$k}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="upload-now">Tải lên</button>
        </div>
    </div>


@include('admin.anh.xem-truoc')
@endsection
