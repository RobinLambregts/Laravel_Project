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
                    <h1 id="Welkomstekst">Welkom bij A.S.G. Diepenbeek</h1>
                    <h3 id="subWelkom">A.S.G., altijd een feestje</h3>
                </div>
        </div> 
            
        <div style="height: 1vw; background: linear-gradient(gray,white);"></div>

        <div id="inschrijven">
            <img src="{{ asset('assets/Schild - Opgevuld.ico') }}" alt="Schild" id="schild">
            <li id="knoppenlijst">
                <ul><a href="https://entrytickets.be/asg/portal/register" id="knop">WORDT LID</a></ul>
                <ul><a href="https://drive.google.com/drive/folders/1hQVQnIpXX_QOmc4pSuZKt3buDKBn6tjQ?usp=sharing" id="knop">Bekijk hier al onze bekskes</a></ul>
            </li>
            <img src="{{ asset('assets/Schild - Opgevuld.ico') }}" alt="Schild" id="schild">
        </div>
    
        <div class="witRood"></div>
    
        <div id="rood" class="preasidiumEvenementen">
            <a href="./Preasidium"><img src="{{ asset('assets/foto-58.jpg') }}" alt="foto Zoë" style="height: 30vw; border-radius: 30px"></a>
            <li>
                <h3 id="linksBeweeg" style="margin: 0; padding: 2vw;">🡨 Leer Zoë Smits en haar preasidium kennen</h3>
                <h3 id="rechtsBeweeg" style="margin: 0; padding: 2vw;">Bekijk al onze komende evenementen 🡪</h3>
            </li>
            <a href="./Evenementen"><img src="{{ asset('assets/images.jpeg') }}" alt="foto Evenementen" style="height: 30vw; border-radius: 30px; width: 20vw"></a>
        </div>
    
        <div class="roodWit"></div>
    
        <div id="inschrijven" style="height:10vw">
            <li id="knoppenlijst">
                <ul><a href="../contact" id="knop">Contacteer ons</a></ul>
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

<div class="roodWit"></div>
    </body>
</html>
