<div class="header-container">
    <div class="nav-logo">
        <a href="{{ url('/admin/dashboard') }}">
            <div class="logo logo-dark" style="background-image: url({{ asset('images/logo/logo.png') }}) "></div>
            <div class="logo logo-white" style="background-image: url({{ asset('images/logo/logo-white.png') }})"></div>
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
            <input class="form-control" type="text" placeholder="Type to search...">
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
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                <div class="search-footer">
                    <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
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
                        <span>Notifications</span>
                    </h5>
                </li>
                <li>
                    <ul class="list-media overflow-y-auto relative scrollable ps-container ps-theme-default" style="max-height: 300px" data-ps-id="e4bc1d69-2a7b-c588-2afb-bafc312a700d">
                        <li class="list-item border bottom">
                            <a href="javascript:void(0);" class="media-hover p-15">
                                <div class="media-img">
                                    <div class="icon-avatar bg-primary">
                                        <i class="ti-settings"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <span class="title">System shutdown</span>
                                    <span class="sub-title">8 min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-item border bottom">
                            <a href="javascript:void(0);" class="media-hover p-15">
                                <div class="media-img">
                                    <div class="icon-avatar bg-success">
                                        <i class="ti-user"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <span class="title">New User Registered</span>
                                    <span class="sub-title">12 min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-item border bottom">
                            <a href="javascript:void(0);" class="media-hover p-15">
                                <div class="media-img">
                                    <div class="icon-avatar bg-warning">
                                        <i class="ti-file"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <span class="title">New Attacthemnet</span>
                                    <span class="sub-title">12 min ago</span>
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
                                    <span class="title">
                                        New Order Received
                                    </span>
                                    <span class="sub-title">12 min ago</span>
                                </div>
                            </a>
                        </li>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </ul>
                </li>
                <li class="p-v-15 p-h-20 text-center">
                    <span>
                        <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                    </span>
                </li>
            </ul>
        </li>
        <li class="user-profile dropdown dropdown-animated scale-left">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img class="profile-img img-fluid" src="{{ asset('images/avatars/thumb-13.jpg') }}" alt="">
            </a>
            <ul class="dropdown-menu dropdown-md p-v-0">
                <li>
                    <ul class="list-media">
                        <li class="list-item p-15">
                            <div class="media-img">
                                <img src="{{ asset('images/avatars/thumb-13.jpg') }}" alt="">
                            </div>
                            <div class="info">
                                <span class="title text-semibold">Marshall Nichols</span>
                                <span class="sub-title">UI/UX Desinger</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="#">
                        <i class="ti-user p-r-10"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ti-power-off p-r-10"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>