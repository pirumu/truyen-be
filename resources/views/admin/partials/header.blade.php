<div id="header" class="app-header">

    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
        <a href="#" class="brand-logo">
            <img src="{{asset('admin/assets/img/full_size.png')}}" alt="" height="20" />
        </a>
    </div>


    <div class="menu">
        <form class="menu-search" method="POST" name="header_search_form">
        </form>

        <div class="menu-item dropdown">
            <a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
                <div class="menu-img online">
                    <img src="{{asset('admin/assets/img/user/user.jpg')}}" alt="" class="mw-100 mh-100 rounded-circle" />
                </div>
                <div class="menu-text">
                    <span class="__cf_username__">{{auth()->check() ? auth()->user()->email : '' }}</span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right mr-lg-3">
                <a class="dropdown-item d-flex align-items-center" href="#">Thông tin cá nhân<i
                            class="fa fa-user-circle fa-fw ml-auto text-gray-400 f-s-16"></i></a>
                <div class="dropdown-divider"></div>
                <a onclick="document.getElementById('logoutForm').submit()" class="dropdown-item d-flex align-items-center" href="#">Đăng xuất <i
                            class="fa fa-toggle-off fa-fw ml-auto text-gray-400 f-s-16"></i>
                <form id="logoutForm" style="display: none" method="POST" action="{{route('dangXuat')}}">
                    @csrf
                </form>
                </a>
            </div>
        </div>
    </div>

</div>
