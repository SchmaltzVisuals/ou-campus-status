<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<body>

  <!-- Header with menu icon -->
  <div class="container-fluid d-flex align-items-center" id="header">
    <img src="images/hamburger-menu-icon.png" style="cursor:pointer" width="70" height="70" class="me-3" alt="Bootstrap">
  </div>





  <!-- Map -->
  <img src="images/ou-map-100%-done.png" id="map">







  <script>
  // Sticky header function
  window.onscroll = function() {myFunction()};
  var header = document.getElementById("header");
  var sticky = header.offsetTop;

  function myFunction() {
      header.classList.add("sticky");
  }
  </script>
  <!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
