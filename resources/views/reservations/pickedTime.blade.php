<!DOCTYPE html>
<html lang="en">
<title>Testovnica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css"/>

<style>

    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar, h1, button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor, .fa-coffee {
        font-size: 200px
    }
</style>
<body>

<!-- Navbar -->
<x-navbar>
</x-navbar>

<!-- Header -->
{{--<header class="w3-container w3-red w3-center" style="padding:128px 16px">--}}
{{--    <h1 class="w3-margin w3-jumbo"><img src="https://www.covid-testcenter.de/wp-content/uploads/2020/10/Logo-COVID-TestCenter.png"></h1>--}}
{{--</header>--}}

<!-- First Grid -->
{{--<div class="container" style="padding-top: 100px;">--}}
{{--    <h1 style="text-align:center;">--}}
{{--        Odabrani termin:--}}

{{--        {{ $parsed->copy()->format('[d-m-Y >> H:i]') }}--}}

{{--    </h1>--}}
{{--</div>--}}
<div class="container" style="padding:128px 16px">
    <h2 style="text-align: center; padding-bottom: 50px">Potvrdi podatke</h2>
    <form method="POST" action="/reservations">
        @csrf
        <input style="display: none" readonly="true" name="user_id" value="{{Auth::user()->id}}">
        <input style="display: none" readonly="true" name="reserved_at" value="{{$parsed->toDateTimeString()}}">
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Datum</div>
            </div>
            <input name="date" class="col-sm-3" readonly="true" value="{{$parsed->format('d-m-Y')}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Vrijeme</div>
            </div>
            <input name="time" class="col-sm-3" readonly="true" value=" {{$parsed->format('H:i')}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Ime</div>
            </div>
            <input name="name" class="col-sm-3" readonly="true" value=" {{Auth::user()->name}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">E-mail</div>
            </div>
            <input name="email" class="col-sm-3" readonly="true" value=" {{Auth::user()->email}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Broj telefona</div>
            </div>
            <input name="phone" class="col-sm-3" readonly="true" value="{{Auth::user()->phone}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Adresa</div>
            </div>
            <input name="address" class="col-sm-3" readonly="true" value="Ilićka 188"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">
            <div class="col-sm-2">
                <div class="p-3 border bg-light">Država</div>
            </div>
            <input name="state" class="col-sm-3" readonly="true" value="{{Auth::user()->country}}"></input>
        </div>
        <div class="row my-custom-row justify-content-center align-items-center w3-padding-30"
             style="padding:30px 30px">
            {{--        <input type="SUBMIT"><button type="button"  class="btn btn-secondary col-sm-2">Potvrdi</button></input>--}}
            <input class="col-sm-3 btn btn-primary" type="submit" name="submit"></input>
        </div>
    </form>
</div>


<!-- Footer -->
<footer class="w3-bar w3-red w3-card w3-left-align w3-large w3-fixed">
    <h1><br> <br></h1>
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
