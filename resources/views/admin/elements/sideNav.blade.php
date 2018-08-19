<div class="side-nav-inner">
    <ul class="side-nav-menu scrollable ps-container ps-theme-default ps-active-y"
        data-ps-id="da89d1a4-638a-e7f4-b906-ed9283d50bd6">
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-gauge"></i>
                </span>
                <span class="title">{{ trans('home.home') }}</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="mdi mdi-image-filter-drama"></i>
                </span>
                <span class="title">{{ trans('home.products') }}</span>
                <span class="arrow">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ url('/admin/categories') }}">{{ trans('home.category') }}</a>
                </li>
                <li>
                    <a href="{{ url('admin/products') }}">{{ trans('home.product') }}</a>
                </li>
                <li>
                    <a href="{{ url('admin/brands') }}">{{ trans('home.brand') }}</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/posts') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-vector-arrange-above"></i>
                </span>
                <span class="title">{{ trans('home.posts') }}</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/sliders') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-compass-outline"></i>
                </span>
                <span class="title">{{ trans('home.sliders') }}</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/orders') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-grid-large"></i>
                </span>
                <span class="title">{{ trans('home.orders') }}</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="{{ url('admin/users') }}">
                <span class="icon-holder">
                    <i class="mdi mdi-file-outline"></i>
                </span>
                <span class="title">{{ trans('home.users') }}</span>
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
