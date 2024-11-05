<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A.S.G.</title>

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
                    <h1 id="Welkomstekst">Contact</h1>
                    <h3 id="subWelkom"></h3>
                </div>
        </div> 
            
        <div style="height: 1vw; background: linear-gradient(gray,white);"></div>

        <div id="wit" class="kaart">
            <li>
                <ul>
                    <h1>Adres:</h1>
                    <p>Agoralaan, gebouw D, 3590 Diepenbeek</p>
                </ul>
                <ul>
                    <h1>Email:</h1>
                    <h3>Voor algemene vragen:</h3>
                    <a href="info@asgdiepenbeek.be">info@asgdiepenbeek.be</a>
                    <h3>Voor samenwerkingen:</h3>
                    <a href="pr@asgdiepenbeek.be">pr@asgdiepenbeek.be</a>
                </ul>
                <ul>
                    <h1>LinkedIn:</h1>
                    <a href="https://www.linkedin.com/company/a-s-g-diepenbeek/ ">https://www.linkedin.com/company/a-s-g-diepenbeek/ </a>
                </ul>
                <ul>
                    <h1>Facebook:</h1>
                    <a href="https://www.facebook.com/asgdiepenbeek">https://www.facebook.com/asgdiepenbeek</a>
                </ul>
                <ul>
                    <h1>Instagram:</h1>
                    <a href="https://www.instagram.com/a.s.g.diepenbeek/">https://www.instagram.com/a.s.g.diepenbeek/</a>
                </ul>
            </li>
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
    </body>
</html>
