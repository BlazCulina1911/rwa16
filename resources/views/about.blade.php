<!DOCTYPE html>
<html lang="en">
<title>Testovnica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<x-navbar>

</x-navbar>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo"><img src="https://www.covid-testcenter.de/wp-content/uploads/2020/10/Logo-COVID-TestCenter.png"></h1>
    @guest
  <form method="get" action="/register">
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Registriraj se</button>
</form>
        @endguest
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Blaž Čulina  </h1>
      <h3 class="w3-padding-20">Datum rođenja: 23.09.1998. <br>Prebivalište: Imotski, Hrvatska <br> Obrazovanje: FSRE (2018- <b>Trenutno</b>)</h3>


    </div>

    <div class="w3-third w3-center">
       <p>
        <img src="{{ asset('img/img2.jpg') }}" class="img-responsive img-rounded" >
       </p>

    </div>
  </div>
</div>
<!-- Second -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <img src="{{ asset('img/img4.jpg') }}" class="img-responsive" width="280" >
      </div>

      <div class="w3-twothird">
        <h1>Martina Vladić </h1>
        <h3 class="w3-padding-20">Datum rođenja: 11.05.2000. <br>Prebivalište: Mostar, BiH <br> Obrazovanje: FSRE (2018- <b>Trenutno</b>)</h3>
      </div>
    </div>
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
