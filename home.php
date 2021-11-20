<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Trafficker CSS -->
<link href="./sass/main.css" rel="stylesheet">
  <title>OU Traffic</title>
</head>
<body style="background-color: grey;">

  <!-- Begin Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#b59a57"><b>OU Traffic</b></a>
    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-lg-center" id="navbarNav">
      <ul class="navbar-nav">
        <!-- Filter Options label -->
        <a class="navbar-brand" style="opacity:.75"><b>Filter Options:</b></a>
        <!-- Parking Button -->
        <li class="nav-item">
          <a class="nav-link active" href="#">Parking</a>
        </li>
        <!-- Dining Button -->
        <li class="nav-item">
          <a class="nav-link active" href="#">Dining</a>
        </li>
        <!-- Recreation Button -->
        <li class="nav-item">
          <a class="nav-link" href="#">Recreation</a>
        </li>
        <!-- Vending Button -->
        <li class="nav-item">
          <a class="nav-link active" href="#">Vending</a>
        </li>
        <!-- Printers Button -->
        <li class="nav-item">
          <a class="nav-link" href="#">Printers</a>
        </li>
        <!-- Study Areas Button -->
        <li class="nav-item">
          <a class="nav-link" href="#">Study Areas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Begin Parking Lot Icons -->
<div id="P1" class="circle">P1</div>
<div id="P2" class="circle">P2</div>
<div id="P3" class="circle">P3</div>
<div id="P5" class="circle">P5</div>
<div id="P9" class="circle">P9</div>

<div id="P11" class="circle">P11</div>
<div id="P12" class="circle">P12</div>
<div id="P13" class="circle">P13</div>
<div id="P16" class="circle">P16</div>
<div id="P17" class="circle">P17</div>
<div id="P18" class="circle">P18</div>

<div id="P24" class="circle">P24</div>
<div id="P26" class="circle">P26</div>
<div id="P28" class="circle">P28</div>
<div id="P29" class="circle">P29</div>

<div id="P31" class="circle">P31</div>
<div id="P32" class="circle">P32</div>
<div id="P35" class="circle">P35</div>
<div id="P36" class="circle">P36</div>
<div id="P37" class="circle">P37</div>
<div id="P38" class="circle">P38</div>
<div id="P39" class="circle">P39</div>

<div id="P41" class="circle">P41</div>
<div id="P42" class="circle">P42</div>

<div id="P51" class="circle">P51</div>
<div id="P53" class="circle">P53</div>
<div id="P55" class="circle">P55</div>
<div id="P57" class="circle">P57</div>

<div id="P61" class="circle">P61</div>
<!-- End Parking Lot Icons -->

  <!-- Map -->
  <img src="images/ou-map-100-done.png" id="map">
  <!-- End Map -->

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<footer>
    <script type="text/javascript" src="js/effects.js"></script>
</footer>
</html>
