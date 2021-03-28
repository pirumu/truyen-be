<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Quản trị truyện| Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" />

</head>
<body>

<div id="app" class="app app-full-height app-without-header">

    <div class="login">

        <div class="login-content">
            <form action="{{route('dangNhap')}}" method="POST" name="login_form">
                <h1 class="text-center">Đăng nhập hệ thống</h1>
                @csrf
                <div class="text-muted text-center mb-4">
                    Trang quản trị nội dung
                </div>
                <div class="form-group">
                    <label>Tài khoản</label>
                    <input required name='email' type="text" class="form-control form-control-lg fs-15px" value="" placeholder="Nhập email" />
                </div>
                @error('username')
                <div class="custom-control custom-checkbox">
                    <label class="fw-500" style='color:firebrick'>{{ $message }}</label>
                </div>
                @enderror
                <div class="form-group">
                    <div class="d-flex">
                        <label>Mật khẩu</label>
                    </div>
                    <input required autocomplete name='password' type="password" class="form-control form-control-lg fs-15px" value="" placeholder="Nhập mật khẩu" />
                </div>
                @error('password')
                <div class="custom-control custom-checkbox">
                    <label class="fw-500" style='color:firebrick'>{{ $message }}</label>
                </div>
                @enderror
                <div class="form-group">
                <div class="custom-control custom-checkbox pl-25px mr-n2">
                    <input  type="checkbox" class="custom-control-input" id="ghi_nho_dang_nhap" name="ghi_nho_dang_nhap">
                    <label class="custom-control-label"  for="ghi_nho_dang_nhap">Ghi nhớ đăng nhập</label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block fw-500 mb-3">Đăng nhập</button>

            </form>
        </div>

    </div>


    <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script src="{{asset('admin/assets/js/app.min.js')}}"></script>

</body>

</html>
