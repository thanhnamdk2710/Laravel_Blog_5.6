<header>
    <div class="container-fluid position-relative no-side-padding">
        <a href="{{ route('home') }}" class="logo">NamDev Blog</a>
        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Features</a></li>
        </ul>
        <div class="src-area">
            {{ Form::open() }}
            {{ Form::button('<i class="ion-ios-search-strong"></i>', ['class' => 'src-btn']) }}
            {{ Form::text('search-input', '', ['class' => 'src-input', 'placeholder' => 'Type of search']) }}
            {{ Form::close() }}
        </div>
    </div>
</header>
