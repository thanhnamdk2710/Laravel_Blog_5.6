<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User"/>
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>{{ __('Profile') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">{{ __('MAIN NAVIGATION') }}</li>
            @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="header">{{ __('SYSTEM') }}</li>
                <li>
                    {{ Form::open(['route' => 'logout', 'id' => 'logout-form', 'style' => 'display: none']) }}
                    {{ Form::close() }}
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();$('#logout-form').submit();">
                        <i class="material-icons">input</i><span>{{ __('Logout') }}</span>
                    </a>
                </li>
            @endif
            @if(Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="header">{{ __('SYSTEM') }}</li>
                <li>
                    {{ Form::open(['route' => 'logout', 'id' => 'logout-form', 'style' => 'display: none']) }}
                    {{ Form::close() }}
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();$('#logout-form').submit();">
                        <i class="material-icons">input</i><span>{{ __('Logout') }}</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2018 Develop by<a href="https://github.com/thanhnamdk2710" target="_blank"> NamDev</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>
