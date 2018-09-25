<header>
    <div class="container-full">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md"  href="#">
                    <i class="fa fa-navicon"></i>
                </a>
                <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                    <i class="fa fa-close"></i>
                </a>
                <div id="logo1">
                    
                    <a href="01-home.html"><img src="img/minilogo.png" alt="nano"></a>
                </div>
                <div id="logo">
                    
                    <a href="{{ url('/') }}"><img src="img/final logo.png" alt="moto"></a>
                </div>
            </div><!-- // col-md-2 -->
            <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                <div class="search-form">
                    <form id="search" action="#" method="post">
                        <input type="text" placeholder="Search artists, events or content..."/>
                        <input type="submit" value="Keywords" />
                    </form>
                </div>
            </div><!-- // col-md-3 -->
            <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                <ul class="top-menu">
                    <li><a href="01-home.html">home</a></li>
                    <li><a href="#">artists</a></li>
                    <li><a href="14-history.html">events</a></li>
                </ul>
            </div><!-- // col-md-4 -->
           
            <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm" style="margin-left: 230px">
                 <!-- <div class="dropdown">
                    <a data-toggle="dropdown" href="#" class="user-area">
                        <div class="thumb"><img src="img/icon-account.png" alt=""></div>
                        <p style="color: white; font-weight:500; font-size: 20px;">ACCOUNT <h3>Log In / Sign Up</h3></p>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu account-menu"> -->
                       <!-- Authentication Links -->
                @guest
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#" class="user-area">
                        <div class="thumb"><img src="img/icon-account.png" alt=""></div>
                        <p style="color: white; font-weight:500; font-size: 20px;">ACCOUNT <h3>Log In / Sign Up</h3></p>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu account-menu">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb"><img src="img/icon-account.png" alt=""></div>
                            <p style="color: white; font-weight:500; font-size: 20px;"> 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </p>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">

                    <li class="nav-item">
                            <a class="nav-link" href="#">My Profile
                         </a>
                    </li>

                    <li class="nav-item">

                        
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                    </ul>
                </div>
            </div>
        </div><!-- // row -->
    </div><!-- // container-full -->
  </header><!-- // header -->


  <!--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
            <!-- Left Side Of Navbar -->
           <!-- <ul class="navbar-nav mr-auto">

            </ul>-->
        
            <!-- Right Side Of Navbar 
            <ul class="navbar-nav ml-auto">-->
                <!-- Authentication Links 
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> -->