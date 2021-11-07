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
  <style>
    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
    .sticky + .content {
      padding-top: 102px;
    }
  </style>
</head>
<body style="background-color: grey;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <a class="navbar-brand" style="color:#b59a57; padding-left:10px">OU Traffic</a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" id="active" onClick="" href="#">Parking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dining</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Recreation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Printers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Study Areas</a>
        </li>
      </ul>
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
