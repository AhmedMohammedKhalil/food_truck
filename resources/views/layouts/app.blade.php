<!doctype html>
<html lang="Ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Carousel Default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <livewire:styles />
    <Style>
        input[type='file']{
            height: auto !important;
        }
    </Style>
    @stack('css')
    <title>{{ config('app.name', 'Food Truck KW') }}</title>
</head>

<body>

     <!-- Start Preloader Area -->
     <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->


    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{  route('home') }}">
                            <img style="height:80px;width:100px" src="{{ asset('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{  route('home') }}">
                        <img style="height:80px;width:100px" src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav" style="align-items: center">


                            <li class="nav-item">
                                <a href="{{  route('home') }}" class="nav-link">
                                        الرئيسية
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    عربات الطعام
                                </a>
                            </li>
                            @if(!auth('admin')->check() && !auth('user')->check())
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer;margin-top: -4px;">
                                        تسجيل دخول
                                        <i class='bx bx-chevron-down'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.login') }}" class="nav-link">
                                                المسئول
                                            </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('user.login') }}" class="nav-link">
                                                المستخدم
                                            </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('user.register') }}" class="nav-link">
                                         إنشاء حساب
                                </a>

                            </li>
                            @else
                                @auth('admin')
                                    <li class="nav-item " >
                                        <a class="nav-link" style="cursor: pointer;margin-top: -4px;">
                                            {{ auth('admin')->user()->name }}
                                            <i class='bx bx-chevron-down'></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                                    لوحة التحكم
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('admin.logout') }}" class="nav-link">
                                                    تسجيل خروج
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                @endauth
                                @auth('user')
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer; margin-top: -4px;">
                                            {{ auth('user')->user()->name }}
                                            <i class='bx bx-chevron-down'></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('user.profile') }}" class="nav-link">
                                                    البروفايل
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{ route('user.logout') }}" class="nav-link">
                                                    تسجيل خروج
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->



    @yield('content')



    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>
                            Food Truck Kw
                            &copy;
                            جميع الحقوق محفوظة
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

     <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-chevron-up"></i>
        <i class="bx bx-chevron-up"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Scripts -->

    <!-- Jquery Slim JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <!-- Form Ajaxchimp JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <livewire:scripts />
    @stack('js')

</body>
</html>
