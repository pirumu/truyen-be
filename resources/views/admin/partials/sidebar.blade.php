<div id="sidebar" class="app-sidebar">

    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <div class="menu-header">Menu</div>
            <div class="menu-item has-sub {{ request()->routeIs('danh-muc.*') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-list-ul"></i></span>
                    <span class="menu-text">Danh mục</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{route('danh-muc.index')}}"
                           class="menu-link {{request()->routeIs('danh-muc.index') ? 'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-2 fa-list-ul"></i></span>
                            <span class="menu-text">Danh sách</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{route('danh-muc.create')}}"
                           class="menu-link {{request()->routeIs('danh-muc.create')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-1 fa-plus"></i></span>
                            <span class="menu-text">Thêm mới</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub {{request()->routeIs('the-loai.*')?'active':''}}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-table"></i></span>
                    <span class="menu-text">Thể loại</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{route('the-loai.index')}}"
                           class="menu-link {{request()->routeIs('the-loai.index')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-2 fa-list-ul"></i></span>
                            <span class="menu-text">Danh sách</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{route('the-loai.create')}}"
                           class="menu-link {{request()->routeIs('the-loai.create')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-1 fa-plus"></i></span>
                            <span class="menu-text">Thêm mới</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub {{request()->routeIs('truyen.*')?'active':''}}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fas fa-fw fa-file"></i></span>
                    <span class="menu-text">Truyện</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{route('truyen.index')}}"
                           class="menu-link {{request()->routeIs('truyen.index')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-2 fa-list-ul"></i></span>
                            <span class="menu-text">Danh sách</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{route('truyen.create')}}"
                           class="menu-link {{request()->routeIs('truyen.create')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-1 fa-plus"></i></span>
                            <span class="menu-text">Thêm mới</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub {{request()->routeIs('anh.*')?'active':''}}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="far fa-fw fa-folder"></i></span>
                    <span class="menu-text">Ảnh bìa</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="{{route('anh.index')}}"
                           class="menu-link {{request()->routeIs('anh.index')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-2 fa-list-ul"></i></span>
                            <span class="menu-text">Danh sách</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="{{route('anh.create')}}"
                           class="menu-link {{request()->routeIs('anh.create')?'active-current':''}}">
                            <span class="menu-icon"><i class="fas fa-fw mr-1 fa-plus"></i></span>
                            <span class="menu-text">Thêm mới</span>
                        </a>
                    </div>
                </div>
            </div>
            {{--            <div class="menu-item">--}}
            {{--                <a href="{{route('setting.index')}}" class="menu-link">--}}
            {{--                    <span class="menu-icon"><i class="fa fa-cog"></i></span>--}}
            {{--                    <span class="menu-text">Cài đặt</span>--}}
            {{--                </a>--}}
            {{--            </div>--}}
        </div>

    </div>


    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>

</div>
