@extends('admin.layout')
@push('css')
    <link href="{{asset('admin/assets/plugins/photoswipe/dist/photoswipe.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/photoswipe/dist/default-skin/default-skin.css')}}" rel="stylesheet" />
@endpush

@push('js')
    <script>
        parent.CALL_FROM_EDITER = {{request()->has('disabePartials')}};

        parent.useTinymce5 =function (url) {
            parent.postMessage({
                mceAction: 'insert',
                content: url
            });
            parent.postMessage({ mceAction: 'close' });
        }
    </script>
    <script src="{{asset('admin/assets/plugins/photoswipe/dist/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/photoswipe/dist/photoswipe.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/demo/page-gallery.demo.js')}}"></script>


@endpush

@section('title')
    <title>Quản lý file</title>
@endsection

@section('content')
    <div class="d-block d-lg-flex align-items-stretch h-100">

        <div class="gallery-menu-container">

            <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">

                <div class="gallery-menu">
                    @foreach($dir as $k => $d)
                        <div class='gallery-menu-header' style="text-transform: uppercase;">{{$k}}</div>
                        @foreach($d as $v)
                            <div class='gallery-menu-item'>
                                <a  style="text-transform: uppercase;" href='{{route('anh.index')."?path=$k-$v"}}' class='gallery-menu-link {{ $activeFolder==$k ? 'active' :''}}'>
                                    <i class='far fa-lg fa-fw fa-folder mr-1'></i>
                                        {{$v}}
                                    </a>
                                </div>
                        @endforeach
                    @endforeach
                </div>

            </div>

        </div>


        <div class="gallery-content-container">

            <div data-scrollbar="true" data-height="100%">

                <div class="gallery-content">

                    <div class="gallery">

                        <div class="float-right btn-group">
                            <a href="{{route('anh.create')}}" class="btn btn-default btn-sm"><i class="fa fa-upload"></i></a>
                        </div>


                        <div class="gallery-title">
                            <a href="#" style="text-transform: uppercase;">
                                {{$activeFolder}} <i class="fa fa-chevron-right"></i> All
                            </a>
                            {{ $photos->appends(request()->input())->render("pagination::default")  }}
                        </div>


                        <div class="gallery-image">
                            <ul class="gallery-image-list">
                                @foreach($photos as $photo)
                                <li><a href="{{asset($photo->anh_bia)}}" itemprop="contentUrl"
                                       data-size="752x502">
                                        <img src="{{asset($photo->anh_bia)}}"
                                                                itemprop="thumbnail" alt="Wedding Image 1"
                                                                class="img-portrait"/>
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
