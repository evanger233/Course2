

    <!-- header -->

    <header>
        <nav class="navbar navbar-main navbar-expand-lg p-0">
            <div class="container-fluid">

                

                <div class="col-1 icon">
                    <a href="#"></a>
                    <a href="#" class="mx-3"> </a>
                    <a href="#"> </a>
                </div>
                <div class="col-10 d-flex justify-content-center">
                    <ul class="navbar-nav text-uppercase">
                        <li class="nav-item px-4 d-flex align-items-center">
                            <a aria-current="page" href="/" class="color">Home</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <div class="dropdown">
                                <a class="btn p-0 border-0" role="button">
                                    Pages<i class="bi bi-chevron-down ms-2"></i>
                                </a>
                                <ul class="dropdown-menu py-0 rounded-0 border-0">
                                <li><a class="dropdown-item border-bottom border-gary py-3" href="{{ route('articles.index') }}">Article</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                        
                    </ul>

                    <!-- logo -->
                    <!-- black logo -->
                    <a href="/" class="logo default-logo">
                        <img src="static/picture/logo.svg" alt="">
                    </a>
                    <!-- white logo -->
                    <a href="" class="logo sticky-logo" style="display: none;">
                        <img src="static/picture/sticky-logo.svg" alt="">
                    </a>
                    <!-- logo-end -->

                    <ul class="navbar-nav text-uppercase">
                        
                        <li class="nav-item px-4 d-flex align-items-center">
                            <a aria-current="page" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item px-4 d-flex align-items-center">
                            <a aria-current="page" href="{{ route('contact.form') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav text-uppercase">
                        @if(Auth::check())  <!-- 检查用户是否已登录 -->
                            <li class="nav-item d-flex align-items-left">
                                <a aria-current="page" href="">Hello,{{ Auth::user()->name }}</a>  <!-- 显示用户名 -->
                            </li>
                            <li class="nav-item px-4 d-flex align-items-center">
                                <a aria-current="page" href="{{ route('logout') }}">Logout</a>  <!-- 登出链接 -->
                            </li>
                        @else
                            <li class="nav-item px-4 d-flex align-items-center">
                                <a aria-current="page" href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="nav-item px-4 d-flex align-items-center">
                                <a aria-current="page" href="{{ route('login') }}">Login</a>  <!-- 登录链接 -->
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </nav>
    </header>