<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <div id="header">
    menu button here
  </div>



  <!-- Map -->
  <img src="images/ou-map-100%-done.png" id="map">


  <script>
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("header");
  var sticky = header.offsetTop;

  function myFunction() {

      header.classList.add("sticky");

  }
  </script>
</body>
</html>
