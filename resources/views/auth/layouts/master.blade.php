<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Интернет Магазин: @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="background-back" style="min-height: 100vh;">
<div id="app">
    <nav class="container navbar navbar-expand-md header-top" style=" background: transparent;">
        <div class="container glass">
            <a class="navbar-brand" href="{{ route('index') }}">
                <div class="logo " style="">
                    <img class="" src="/images/logo/logo_custom.svg" alt="My SVG Icon" style="width: 100px; z-index:2; padding:0;">
                    {{--                            <img class="position-absolute absolute-center" src="/images/logo/ruler.svg" alt="My SVG Icon" style="transform:rotate(45deg); z-index:1; padding:0;">--}}
                </div>
            </a>
            <button class="navbar-toggler main-colors" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="padding:0px 5px 5px 0px;">
                    <span class="navbar-toggler-icon">
                         <img src="/images/svg/list-menu-hand-drawn-symbol-of-three-thin-rectangles-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 35px; padding:0;">
                    </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    @admin
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}" style="color: var(--main-color);">
                            Категории
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}" style="color: var(--main-color);">
                            Товары
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" style="color: var(--main-color);">
                            Заказы
                        </a>
                    </li>
                    @endadmin

                @guest
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('login') }}" style="color: var(--main-color);">
                                <img class="main-colors" src="/images/svg/next-user-hand-drawn-interface-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                Войти
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('register') }}" style="color: var(--main-color);">
                                <img class="main-colors" src="/images/svg/users-couple-hand-drawn-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                Зарегистрироваться
                            </a>
                        </li>
                    </ul>
                @endguest

                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout')}}" style="color: var(--main-color);">
                                    <img class="main-colors" src="/images/svg/exit-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px; transform:scaleX(-1);">
                                    Выйти
                                </a>
                                <form id="logout-form" action="{{ route('logout')}}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="py-4 container">
        @yield('content')
    </div>
</div>
</body>
</html>
