<!DOCTYPE html>
<html lang="en">
<title>Testovnica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css" />

<style>

    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<x-navbar>
</x-navbar>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">O nama</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Moj profil</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Termini</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Kontakt</a>
</div>
</div>

<!-- Header -->

<!-- First Grid -->
<div class="container" style="padding:128px 16px">
    <h2 style="text-align: center; padding-bottom: 50px">Podaci o rezervaciji</h2>
    <form method="POST" action="/reservations">
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Datum</div>
            </div>
            <input name="date" class="col-sm-3" readonly="true" value="{{\Carbon\Carbon::parse($reservation->reserved_at)->format('d-m-Y')}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Vrijeme</div>
            </div>
            <input name="time" class="col-sm-3" readonly="true" value=" {{\Carbon\Carbon::parse($reservation->reserved_at)->format('H:i')}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Ime</div>
            </div>
            <input name="name" class="col-sm-3" readonly="true" value="{{$user->name}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">E-mail</div>
            </div>
            <input name="email" class="col-sm-3" readonly="true" value="{{$user->email}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Broj telefona</div>
            </div>
            <input name="phone" class="col-sm-3" readonly="true" value="{{$user->phone}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Adresa</div>
            </div>
            <input name="address" class="col-sm-3" readonly="true" value="TODO"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Država</div>
            </div>
            <input name="state" class="col-sm-3" readonly="true" value="{{$user->country}}"></input>
        </div>
    </form>
    <div style="display: flex; margin-top: 50px; justify-content: center; align-items: center;">
    {!! QrCode::size(300)->generate(Request::url()); !!}
    </div>
</div>

<div style="container w3-left w3-jumbo w3-margin">
    <p></p>
</div>
<!-- Footer -->
<footer class="w3-bar w3-red w3-card w3-left-align w3-large">
    <h1> <br> <br></h1>
</footer>

<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>
