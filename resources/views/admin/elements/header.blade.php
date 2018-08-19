<div class="header-container">
    <div class="nav-logo">
        <a href="{{ url('/admin') }}">
            <div class="logo logo-dark"></div>
            <div class="logo logo-white"></div>
        </a>
    </div>
    <ul class="nav-left">
        <li>
            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                <i class="mdi mdi-menu"></i>
            </a>
            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                <i class="mdi mdi-menu"></i>
            </a>
        </li>
        <li class="search-box active">
            <a class="search-toggle" href="javascript:void(0);">
                <i class="search-icon mdi mdi-magnify"></i>
                <i class="search-icon-close mdi mdi-close-circle-outline"></i>
            </a>
        </li>
        <li class="search-input active">
            <input class="form-control" type="text" placeholder="{{ trans('home.search') }}">
            <div class="search-predict">
                <div class="search-wrapper scrollable ps-container ps-theme-default" data-ps-id="fdaba925-f5d4-c322-db02-385b5550d7fa">
                    <div class="p-v-10">
                        <span class="display-block m-v-5 p-h-20 text-gray">
                            <i class="ti-file p-r-5"></i>
                            <span>Files</span>
                        </span>
                        <ul class="list-media">
                            <li class="list-item">
                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-success">
                                            <i class="mdi mdi-file-outline"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title p-t-10">Document.xls</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-info">
                                            <i class="mdi mdi-file-outline"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title p-t-10">Mockup.doc</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                    <div class="media-img">
                                        <div class="icon-avatar bg-danger">
                                            <i class="mdi mdi-file-outline"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span class="title p-t-10">Document.pdf</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="m-h-20 border top"></div>
                    <div class="p-v-10">
                        <span class="display-block m-v-5 p-h-20 text-gray">
                            <i class="ti-user p-r-5"></i>
                            <span>Members</span>
                        </span>
                        <ul class="list-media">
                            <li class="list-item">
                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                    <div class="media-img">
                                        <img src="{{ asset('images/avatars/thumb-3.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title p-t-10">Debra Stewart</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-item">
                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                    <div class="media-img">
                                        <img src="{{ asset('images/avatars/thumb-5.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <span class="title p-t-10">Jane Hunt</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ps-scrollbar-x-rail">
                        <div class="ps-scrollbar-x" tabindex="0"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail">
                        <div class="ps-scrollbar-y" tabindex="0"></div>
                    </div>
                </div>
                <div class="search-footer">
                    <span>You are Searching for '
                        <b class="text-dark">
                            <span class="serach-text-bind"></span>
                        </b>'
                    </span>
                </div>
            </div>
        </li>
    </ul>
    <ul class="nav-right">
        <li class="notifications dropdown dropdown-animated scale-left">
            <span class="counter">2</span>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-ring-outline"></i>
            </a>
            <ul class="dropdown-menu dropdown-lg p-v-0">
                <li class="p-v-15 p-h-20 border bottom text-dark">
                    <h5 class="m-b-0">
                        <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                        <span>{{ trans('home.notification') }}</span>
                    </h5>
                </li>
                <li>
                    <ul class="list-media overflow-y-auto relative scrollable ps-container ps-theme-default" data-ps-id="e4bc1d69-2a7b-c588-2afb-bafc312a700d">
                        <li class="list-item border bottom">
                            <a href="javascript:void(0);" class="media-hover p-15">
                                <div class="media-img">
                                    <div class="icon-avatar bg-success">
                                        <i class="ti-user"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <span class="title">{{ trans('home.user_register') }}</span>
                                    <span class="sub-title">12 {{ trans('home.minute_ago') }}</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-item border bottom">
                            <a href="javascript:void(0);" class="media-hover p-15">
                                <div class="media-img">
                                    <div class="icon-avatar bg-info">
                                        <i class="ti-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <span class="title">{{ trans('home.new_order') }}</span>
                                    <span class="sub-title">12 {{ trans('home.minute_ago') }} </span>
                                </div>
                            </a>
                        </li>
                        <div class="ps-scrollbar-x-rail">
                            <div class="ps-scrollbar-x" tabindex="0"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail">
                            <div class="ps-scrollbar-y" tabindex="0"></div>
                        </div>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="user-profile dropdown dropdown-animated scale-left">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img class="profile-img img-fluid" src="{{ asset('uploads/user/avatar/' . Auth::user()->avatar) }}" alt="">
            </a>
            <ul class="dropdown-menu dropdown-md p-v-0">
                <li>
                    <ul class="list-media">
                        <li class="list-item p-15">
                            <div class="media-img">
                                <img src="{{ asset('uploads/user/avatar/' . Auth::user()->avatar) }}" alt="">
                            </div>
                            <div class="info">
                                <span class="title text-semibold">{{ Auth::user()->name }}</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="{{ url('admin/users/' . Auth::user()->id)  }}">
                        <i class="ti-user p-r-10"></i>
                        <span>{{ trans('home.profile') }}</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ti-power-off p-r-10"></i>
                        <span>{{ trans('home.logout') }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
