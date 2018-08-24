 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i>{{ trans('home_admin.Dashboard') }}</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>{{ trans('home_admin.Category') }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('listCategory') }}">{{ trans('home_admin.List Category') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('addCategory') }}">{{ trans('home_admin.Add Category') }}</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> {{ trans('home_admin.Product') }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('listProduct') }}">{{ trans('home_admin.List Product') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('addProduct') }}">{{ trans('home_admin.Add Product') }}</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> {{ trans('home_admin.User') }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('listUser') }}">{{ trans('home_admin.List User') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('addUser') }}">{{ trans('home_admin.Add User') }}</a>
                                </li>
                                <li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
