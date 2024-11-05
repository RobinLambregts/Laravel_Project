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
                    <h1 id="Welkomstekst">Evenementen</h1>
                    <h3 id="subWelkom"></h3>
                </div>
        </div> 
            
        <div style="height: 1vw; background: linear-gradient(gray,white);"></div>

        <div class="lijst">
            <?php foreach ($evenementenList as $evenement): ?>
                <li id="evenementen">
                    <p><?php echo htmlspecialchars($evenement['naam']); ?></p>
                    <p><?php echo htmlspecialchars($evenement['datum']); ?></p>
                    <p><?php echo htmlspecialchars($evenement['locatie']); ?></p>
                </li>
            <?php endforeach; ?>
        </div>

        @auth
            <div id="eventManager">
                <div>
                    <form action="{{ route('addEvent') }}" method="POST">
                        @csrf
                        <label for="eventname">naam:</label>
                        <input class="eventInput" type="text" name="naam" required/><br>
                        <label for="eventDate">datum:</label>
                        <input class="eventInput" type="date" name="datum" required/><br>
                        <label for="locatie">locatie:</label>
                        <input class="eventInput" type="text" name="locatie" required/><br>
                        <button>voeg evenement toe</button>
                    </form>
                </div>

                <div>
                    <form action="{{ route('updateEvent') }}" method="POST">
                        @csrf
                        <label for="eventname">naam: <br><input class="eventInput" type="text" name="naam" required/></label>
                        <label for="newLocation">nieuwe locatie: <br><input class="eventInput" type="text" name="newLocation" required/></label>
                        <button>update evenement</button>
                    </form>
                </div>

                <div>
                    <form action="{{ route('deleteEvent') }}" method="POST">
                        @csrf
                        <label for="eventname">naam: <br><input class="eventInput" type="text" name="naam" required/></label>
                        <button>verwijder evenement</button>
                    </form>
                </div>
                
            </div>
        @endauth

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
