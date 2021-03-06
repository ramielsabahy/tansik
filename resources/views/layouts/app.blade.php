<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>لوحة تحكم تنسيق</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{URL::asset('css/parsley.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    <style type="text/css">
        .list-group-item a{
            float: right;
        }
    </style>
    @yield('css')
</head>
<body>
    <div id="app">
        @guest
        @else
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-bottom: 22px;">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
        </nav>
        @endguest
        <div class="container" style="direction: rtl">
            <div class="row">
                @if(Auth::check())
                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('service') }}">ادارة الخدمات</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('products') }}">ادارة المنتجات</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('about') }}">من نحن</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('information') }}">المعلومات الاساسيه</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('serviceOrders') }}">الخدمات المطلوبه</a>
                            </li>
                            <!-- <li class="list-group-item">
                                <a href="">اطلب خدمة</a>
                            </li>
                            <li class="list-group-item">
                                <a href="">Create Tag</a>
                            </li>
                            <li class="list-group-item">
                                <a href="">All Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="">Trashed Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="">Create new category</a>
                            </li>
                            <li class="list-group-item">
                                <a href="">Create new post</a>
                            </li> -->
                        </ul>
                    </div>
                @endif
                <div class="col-lg-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

@yield('js')
<script src="{{URL::asset('js/parsley.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
<script type="text/javascript">
    @if(Session::has('success'))
        toastr.success(" {{ Session::get('success') }} ");
    @endif

    @if(Session::has('info'))
        toastr.info(" {{ Session::get('info') }} ");
    @endif
</script>
</html>
