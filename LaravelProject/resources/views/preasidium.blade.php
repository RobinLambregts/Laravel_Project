<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Preasidium</title>

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/opdeling.css') }}">

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
                    <h1 id="Welkomstekst">Preasidium</h1>
                    <h3 id="subWelkom">Leer ons kennen</h3>
                </div>
        </div> 
            
        <div style="height: 1vw; background: linear-gradient(gray,white);"></div>

        <div class="hp">
            <div class="preases"><p>{{$preasidiumList[0]->naam}}</p><p>{{$preasidiumList[0]->functie}}</p></div>
            <div class="vice1"><p>{{$preasidiumList[1]->naam}}</p><p>{{$preasidiumList[1]->functie}}</p></div>
            <div class="vice2"><p>{{$preasidiumList[2]->naam}}</p><p>{{$preasidiumList[2]->functie}}</p></div>
        </div>
        <div class="hp2">
            <div class="aa"><p>{{$preasidiumList[3]->naam}}</p><p>{{$preasidiumList[3]->functie}}</p></div>
            <div class="questor"><p>{{$preasidiumList[4]->naam}}</p><p>{{$preasidiumList[4]->functie}}</p></div>
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
