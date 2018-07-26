<div class="side-nav-inner">
    <ul class="side-nav-menu scrollable ps-container ps-theme-default ps-active-y"
        data-ps-id="da89d1a4-638a-e7f4-b906-ed9283d50bd6">
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-gauge"></i>
                </span>
                <span class="title">Trang chủ</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="mdi mdi-image-filter-drama"></i>
                </span>
                <span class="title">Quản lý sản phẩm</span>
                <span class="arrow">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ url('/admin/categories') }}">Danh mục</a>
                </li>
                <li>
                    <a href="{{ url('admin/products') }}">Sản phẩm</a>
                </li>
                <li>
                    <a href="{{ url('admin/brands') }}">Thương hiệu</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/posts') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-vector-arrange-above"></i>
                </span>
                <span class="title">Quản lý bài đăng</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/sliders') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-compass-outline"></i>
                </span>
                <span class="title">Quản lý slider</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/orders') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-grid-large"></i>
                </span>
                <span class="title">Quản lý đơn hàng</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/users') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-file-outline"></i>
                </span>
                <span class="title">Quản lý người dùng</span>
            </a>
        </li>
        <div class="ps-scrollbar-x-rail">
            <div class="ps-scrollbar-x" tabindex="0"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="">
            <div class="ps-scrollbar-y" tabindex="0"></div>
        </div>
    </ul>
</div>
