 <!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">{{ trans('home_admin.Toggle navigation') }}</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">{{ trans('home_admin.Admin') }}</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    @if(Auth::check())
                        <a title="Log In" href="{{ route('login')  }}">{{ Auth::user()->name }}</a>
                    @else
                        <a title="Log In" href="{{ route('login') }}">{{ __('LogIn') }}</a>
                    @endif
                </li>
                <li class="divider"></li>
                <li>
                    @if(Auth::check())
                        <a title="Log Out" href="{{ route('logout') }}">{{ __('LogOut') }}</a>
                    @endif
                </li>
            </ul>
        </li>
    </ul>
    @include('admin.layout.menu')
</nav>
