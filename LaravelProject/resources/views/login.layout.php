<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- Styles -->
        <style>

        </style>
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

        <h6>example: naam = Zoë Smits     ww = zoeWachtwoord</h6>
        <h6>example2: naam = Nora Van Dessel       ww = noraWachtwoord</h6>
        <h6>example3: naam = Boud Goossenaerts       ww = boudWachtwoord</h6>
    
        <div class="logIn">
            <form method="POST" action="/login">
                @csrf
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" placeholder="naam"><br>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" placeholder="wachtwoord"><br>
                <button>Log in</button>
            </form>
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