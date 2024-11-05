<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Scripts -->
</head>
<body>
    <nav class="header">
        <a href="#Welkom">
            <img src="{{ asset('assets/Schild - Opgevuld.ico') }}" alt="schild asg" id="schild" style="height: 0;">
        </a>
        <li id="navBar">
            <ul><a href="./">A.S.G.</a></ul>
            <ul><a href="./overOns">Over Ons</a></ul>
            <ul><a href="./preasidium">Preasidium</a></ul>
            <ul><a href="./evenementen">Evenementen</a></ul>
            <ul><a href="./contact">Contact</a></ul>
            <ul><a href="./login">Log In</a></ul>
        </li>
    </nav>

    <div id="Welkom">
        <img src="{{ asset('assets/AA.jpg') }}" alt="ASG group image" id="groepsfoto">
            <div id="tekstvak">
                <h1 id="Welkomstekst">Log in</h1>
                <h3 id="subWelkom">Alleen voor preasidium</h3>
            </div>
    </div> 

    <div style="height: 1vw; background: linear-gradient(gray,white);"></div>

    <div id="app">
            <div class="container">
                <div class="logIn">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                </div>
            </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="witRood"></div>

    <footer style="background-color: red;" class="footer">
        <li>
            <ul>
               <img src="{{ asset('assets/ACE (wit)-4.webp') }}" alt="">
                <img src="{{ asset('assets/Daikin (wit)-3.webp') }}" alt="">
                <img src="{{ asset('assets/Logo-elia_white_sub_4C.webp') }}" alt="">
                <img src="{{ asset('assets/sweco (wit).webp') }}" alt="">
                <img src="{{ asset('assets/Tormans (wit)-9.webp') }}" alt="">
                <img src="{{ asset('assets/uhasselt (wit)-1.webp') }}" alt=""> 
            </ul>
            <ul id="creator">created by Robin L.</ul>
        </li>
    </footer>
    
    <div class="roodWit"></div>
</body>
</html>
