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
<div class="container" style="padding-top: 100px; padding-bottom: 61.8vh">
    <h1 style="text-align:center;">
        Odabrani datum:

        {{ $parsed->copy()->format('d-m-Y') }}

    </h1>

    <h2>Odaberi vrijeme</h2>
    <div
        style="position:relative; top: 30px; display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; flex: 1;">
        @foreach(\App\Models\Reservation::availableAt($parsed) as $time)
            <a href="{{url()->current()}}/{{{$time->format('H:i')}}}">
                <button>{{ $time->format('H:i') }}</button>
        @endforeach
    </div>
</div>
{{--<div class="container" style="padding:128px 16px">--}}
{{--    <div>--}}

{{--    </div>--}}

{{--    <form>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Vrijeme termina</div></div>--}}
{{--        <input type="datetime-local" min="{{  \Carbon\Carbon::now('Europe/Zagreb')  }}" max="{{ \Carbon\Carbon::tomorrow('Europe/Zagreb')   }}" id="birthday" name="birthday"class="col-sm-3"></input>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">E-mail</div></div>--}}
{{--        <input class="col-sm-3" disabled value=" {{Auth::user()->email}}"></input>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Broj telefona</div></div>--}}
{{--        <input class="col-sm-3" disabled value="{{Auth::user()->phone}}"></input>--}}
{{--    </div>--}}
{{--    </form>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Adresa</div></div>--}}
{{--        <input class="col-sm-3" disabled value=""></input>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Poštanski broj</div></div>--}}
{{--        <input type="number" class="col-sm-3" disabled></input>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Država</div></div>--}}
{{--        <input class="col-sm-3" disabled value="{{Auth::user()->country}}"></input>--}}
{{--    </div>--}}

{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-30" >--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Korisničko ime</div></div>--}}
{{--        <input class="col-sm-3" disabled></input>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-20">--}}
{{--        <div class="col-sm-2"><div class="p-3 border bg-light">Lozinka</div></div>--}}
{{--        <input type="password"class="col-sm-3" disabled></input>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-30" style="padding:30px 30px">--}}
{{--        <button type="button" class="btn btn-secondary col-sm-2">Registriraj se</button>--}}
{{--    </div>--}}
{{--    <div class="row my-custom-row justify-content-center align-items-center w3-padding-30" style="padding:20px 20px">--}}
{{--        <h5 class="text-center">Imate profil? <a href="prijava.html"> Prijavite se</a> </h5>--}}
{{--    </div>--}}

{{--</div>--}}


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
