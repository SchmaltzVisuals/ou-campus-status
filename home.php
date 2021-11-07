<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Trafficker CSS -->
<link href="styles.css" rel="stylesheet">
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


  <!-- Map -->
  <img src="images/ou-map-100-done.png" id="map">
  <!-- End Map -->



  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
