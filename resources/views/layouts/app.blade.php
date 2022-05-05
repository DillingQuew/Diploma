<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="border-bottom: 2px solid hotpink;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                    min-width: 20px; min-height: 20px; border: 2px solid black; border-radius: 20px;--}}
                    <div style="">
                        <h1 style="margin:5px; color: hotpink">СКАЗКА</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="/">Каталог</a>--}}
{{--                        </li>--}}

                        <li class="nav-item">
                            <a class="nav-link" href="/" style="color: hotpink;">
                                <img src="public/images/svg/list-paper-hand-drawn-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px; filter: invert(57%) sepia(54%) saturate(1447%) hue-rotate(296deg) brightness(102%) contrast(101%);">
                                О нас
                            </a>
                        </li>


                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}

                                    <a class="nav-link" href="{{ route('login') }}" style="color: hotpink;">

                                        <img src="public/images/svg/next-user-hand-drawn-interface-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px; filter: invert(57%) sepia(54%) saturate(1447%) hue-rotate(296deg) brightness(102%) contrast(101%);">
                                        Войти
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: hotpink;">
                                        <img src="public/images/svg/users-couple-hand-drawn-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px; filter: invert(57%) sepia(54%) saturate(1447%) hue-rotate(296deg) brightness(102%) contrast(101%);">
                                        Регистрация
                                    </a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 background-back ">
            @yield('content')
        </main>
    </div>
</body>
</html>
