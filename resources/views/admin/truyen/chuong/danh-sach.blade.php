@extends('admin.layout')
@push('css')
    <style>

        .book {
            position: relative;
            transform: perspective(300px) rotateY(
                -3deg
            );
            -moz-perspective: 300px;
            -moz-transform: rotateY(-3deg);
            -webkit-transform: perspective(300) rotateY(
                -3deg
            );
            outline: 1px solid transparent;
            box-shadow: 5px 5px 20px #333;
            margin: 0;
        }
        .book {
            position: relative;
            transform: perspective(300px) rotateY(
                -3deg
            );
            -moz-perspective: 300px;
            -moz-transform: rotateY(-3deg);
            -webkit-transform: perspective(300) rotateY(
                -3deg
            );
            outline: 1px solid transparent;
            box-shadow: 5px 5px 20px #333;
            margin: 0;
        }

        .book::after {
            width: 5%;
            left: 100%;
            background-color: #EFEFEF;
            box-shadow: inset 0px 0px 5px #aaa;
            transform: perspective(300px) rotateY(
                20deg
            );
            -moz-transform: rotateY(20deg);
            -webkit-transform: perspective(300) rotateY(
                20deg
            );
        }
        .book img {
            position: relative;
            width: 100%;
        }
        .book::after {
            position: absolute;
            top: 2%;
            height: 96%;
            content: ' ';
            z-index: -1;
        }
        .book::before {
            width: 100%;
            left: 7.5%;
            background-color: #000;
        }
        h5 {
            text-align: right;
            margin-right: 5px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            font-size: inherit;
            display: inline-block;
        }

        .info-holder .info {
            padding: 5px;
            margin-top: 5px;
            margin-right: 15px;
            border-right: 1px solid #DDD;
            font-family: "Roboto Condensed",Tahoma,sans-serif;
        }

        h3.title {
            font-size: 24px;
            font-weight: bold;
            margin: 0 0 5px;
            padding: 0 15px 7px;
            border-bottom: 1px solid #b5b5b5;
            text-transform: uppercase;
            font-family: "Roboto Condensed",Tahoma,sans-serif;
            float: right;
            width: 100%;
            text-align: center;

        }

        #truyen .title-list, .list-side .title-list {
            margin-bottom: 15px;
        }


        #list-chapter {

            margin-top: 10px;
        }
        .title-list {
            text-align: left;
            height: 40px;
            text-transform: uppercase;
            border-bottom: 1px solid #CCC;
            position: relative;
            margin-bottom: 15px;
        }
        .title-list>h2, .title-list>h4 {
            font-size: 20px;
            height: 40px;
            line-height: 40px;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            border-bottom: 1px solid #4E4E4E;
            display: inline-block;
        }
        .l-chapter .l-chapters>li, .list-chapter>li {
            padding: 5px 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .list-chapter>li>a {
            font-size: 15px;
            line-height: 18px;
            display: inline;
            margin: 0;
            color: #4E4E4E;
        }
    </style>
@endpush

@push('js')
@endpush

@section('title')
    <title>Trang quản trị</title>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                <li class="breadcrumb-item"><a href="#">Truyện</a></li>
                <li class="breadcrumb-item active">Chương</li>
            </ul>
            <h1 class="page-header mb-0">Thông tin truyện</h1>
        </div>
        <div class="ml-auto">
            <a href="{{route('chuong.create').'?ma_truyen='.$truyen->ma_truyen}}" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw mr-1"></i> Thêm mới chương</a>
        </div>
    </div>
    <div class="card">
        <div class="tab-content p-4">
            <div class="tab-pane fade show active" id="allTab">
                <div class="row">
                        <div class="col-xl-3">
                            <div class="books" style="padding-bottom: 25px">
                                <div class="book"><img src="{{asset($truyen->anh_bia)}}"></div>
                            </div>
                            <div class="info" >
                                <div>
                                    <h5>Tác giả:</h5>
                                    <span>{{$truyen->tac_gia}}</span>
                                </div>
                                <div>
                                    <h5>Danh mục:</h5>
                                    <span>{{$truyen->danhmuc->ten_danh_muc}}</span>
                                </div>
                                <div>
                                    <h5>Thể loại:</h5>
                                    <span>{{$truyen->theloai->ten_the_loai}}</span>
                                </div>
                                <div>
                                    <h5>Nguồn:</h5>
                                    <span>{{$truyen->xuat_xu}}</span>
                                </div>
                            </div>
                        </div>
                        <div style="padding-left: 50px;padding-bottom: 15px" class="col-xl-9">
                            <div class="col-xl-12" style="padding-bottom: 50px" >
                                <h3 class="title">{{$truyen->ten}} (<a href="{{route('truyen.edit',$truyen->ma_truyen)}}" title="Sửa"><i class="fa fa-sm fa-fw fa-pen"></i></a>)</h3>
                            </div>
                            <div class="rate">
                                <div class="rate-holder" data-score="8.7" style="cursor: pointer;">
                                    <img alt="1" src="//static.8cache.com/lib/raty/images/star-on.png" title="Không còn gì để nói...">&nbsp;<img alt="2" src="//static.8cache.com/lib/raty/images/star-on.png" title="WTF">&nbsp;<img alt="3" src="//static.8cache.com/lib/raty/images/star-on.png" title="Cái gì thế này ?!">&nbsp;<img alt="4" src="//static.8cache.com/lib/raty/images/star-on.png" title="Haizz">&nbsp;<img alt="5" src="//static.8cache.com/lib/raty/images/star-on.png" title="Tạm">&nbsp;<img alt="6" src="//static.8cache.com/lib/raty/images/star-on.png" title="Cũng được">&nbsp;<img alt="7" src="//static.8cache.com/lib/raty/images/star-on.png" title="Khá đấy">&nbsp;<img alt="8" src="//static.8cache.com/lib/raty/images/star-on.png" title="Được">&nbsp;<img alt="9" src="//static.8cache.com/lib/raty/images/star-half.png" title="Hay">&nbsp;<img alt="10" src="//static.8cache.com/lib/raty/images/star-off.png" title="Tuyệt đỉnh!"><input name="score" type="hidden" value="8.7"></div>
                                <em class="rate-text"></em>
                                <div class="small" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating"><em>Đánh giá: <strong><span itemprop="ratingValue">8.7</span></strong>/<span class="text-muted" itemprop="bestRating">10</span> từ <strong><span itemprop="ratingCount">696</span> lượt</strong></em></div>
                            </div>
                            <div class="desc-text desc-text-full" itemprop="description">
                                <br>
                                {!! $truyen->gioi_thieu_truyen !!}
                            </div>
                        </div>
                    <div class="col-xl-12" id="list-chapter">
                        <div class="title-list">
                            <h2>Danh sách chương</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <ul class="list-chapter">
                                    @foreach($truyen->chuong as $c)

                                    <li><span class="fa fa-certificate"></span>
                                        <a href="{{route('chuong.edit',$c->ma_chuong).'?ma_truyen='.$truyen->ma_truyen}}" >
                                           <span>{{$c->ten_chuong}}</span>
                                        </a>
                                        (<a href="#" style="color:red" title="xoá"><i class="fa fa-sm fa-fw fa-trash"></i></a>)
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
