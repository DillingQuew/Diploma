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
    <div class="background-back" id="app">
        <header>
            <nav class=" container navbar navbar-expand-md header-top" style=" background: transparent;">
                <div class="container glass">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{--                    {{ config('app.name', 'Laravel') }}--}}
                        {{--                    min-width: 20px; min-height: 20px; border: 2px solid black; border-radius: 20px;--}}
                        <div style="">
                            <h1 style="margin:5px; color: white">СКАЗКА</h1>
                        </div>
                    </a>
                    <button class="navbar-toggler main-colors" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="padding:0px 5px 5px 0px;">
                    <span class="navbar-toggler-icon">
                         <img src="public/images/svg/list-menu-hand-drawn-symbol-of-three-thin-rectangles-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 35px; padding:0;">
                    </span>
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
                                <a class="nav-link" href="/" style="color:white;">
                                    <img class="main-colors" src="public/images/svg/list-paper-hand-drawn-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                    О нас
                                </a>
                            </li>


                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        {{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}

                                        <a class="nav-link" href="{{ route('login') }}" style="color: white;">

                                            <img class="main-colors" src="public/images/svg/next-user-hand-drawn-interface-symbol-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
                                            Войти
                                        </a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" style="color: white;">
                                            <img class="main-colors" src="public/images/svg/users-couple-hand-drawn-outlines-svgrepo-com.svg" alt="My SVG Icon" style="width: 25px;">
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
        </header>

        <div style="width: 100%; height: 70px"></div>
        <main class="py-4" style="height: 100vh;">
            @yield('content')
        </main>
    </div>
</body>
</html>
