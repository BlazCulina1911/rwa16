<!DOCTYPE html>
<html lang="en">
<title>Testovnica</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<div class="container" style="padding:80px 16px">





  <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h2>Sveučilišna klinička bolnica Mostar </h2>
        <h3 class="w3-padding-20"> <br>Ulica Kralja Tvrtka bb, 88000 Mostar, Bosna i Hercegovina<br>Centrala: +387 36 336 000 <br>Telefax: +387 36 322 712<br>E-mail: ravnateljstvo@skbm.ba</h3>
  <br><br>
  <img class ="slika2" src="https://www.skbm.ba/wp-content/themes/w4w/img/logo-footer.png" alt="Logo skbm.ba">
      </div>

      <div class="w3-third w3-center">
         <p>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?ll=43.344967733683305,17.789697647094727&q=&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://techwithlove.com/how-to-know-who-viewed-my-whatsapp-profile/">https://techwithlove.com/how-to-know-who-viewed-my-whatsapp-profile/</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
         </p>

      </div>
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
