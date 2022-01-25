<div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-white">Početna</a>
        <a href="{{ url('/contact') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Kontakt</a>
        <a href="{{ url('/about') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">O nama</a>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w3-bar-item w3-button w3-padding-large w3-right" type="submit">Odjavi se</button>
            </form>
            <a href="{{ url('/reservations') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Rezervacija</a>
            <a href="{{ url('/profile') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right">Moj Profil</a>
        @endauth
        @guest
            <a href="{{ url('register') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right">Registracija</a>
            <a href="{{ url('login') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right">Prijava</a>
        @endguest
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large">Početna</a>
        <a href="{{ url('/about') }}" class="w3-bar-item w3-button w3-padding-large">O nama</a>
        <a href="{{ url('/contact') }}" class="w3-bar-item w3-button w3-padding-large">Kontakt</a>
        @auth
            <a href="{{ url('/profile') }}" class="w3-bar-item w3-button w3-padding-large">Moj Profil</a>
            <a href="{{ url('/reservations') }}" class="w3-bar-item w3-button w3-padding-large">Rezervacija</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w3-bar-item w3-button w3-padding-large" type="submit">Odjavi se</button>
            </form>
        @endauth

        @guest
            <a href="{{ url('/login') }}" class="w3-bar-item w3-button w3-padding-large">Prijava</a>
            <a href="{{ url('/register') }}" class="w3-bar-item w3-button w3-padding-large">Registracija</a>
        @endguest
    </div>
</div>
