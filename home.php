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


<!-- Display Parking Lot Icons -->
<?php
// Connect to database
require "connect.php";
// Select all columns from the parkinglots table in the database
$sql = "select * from parkinglots";
$result = $connect->query($sql);
// Loop through all rows in the table
while ($row = $result->fetch_assoc()){
  // Save the parking lot number and number of reports as variables
  $numReports = $row['reports'];
  $lotID = $row['id'];
  // If the parking lot has 20 or more reports, set lotIconColor to red
  if ($numReports >= 20) {
    $lotIconColor = "red";
  }
  // If the parking lot has 10 or more (but less than 20) reports, set lotIconColor to yellow
  else if ($numReports >= 10) {
    $lotIconColor = "yellow";
  }
  // If the parking lot has less than 10 reports, set lotIconColor to lightgreen
  else {
    $lotIconColor = "lightgreen";
  }
  // Print lot icon
  echo '<button id="P'.$lotID.'" class="circle" style="background-color:'.$lotIconColor.'">P'.$lotID.'</button>';
}
// Close the database connection
$connect->close();
 ?>
<!-- End Parking Lot Icons -->


<!-- Begin Popup -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 id="lotName"></h1>
    <p>Some text in the Modal..</p>
  </div>
</div>
<!-- End Popup -->


  <!-- Map -->
  <img src="images/ou-map-100-done.png" id="map">
  <!-- End Map -->

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<footer>
    <!-- Modal JS -->
    <script type="text/javascript" src="js/effects.js"></script>

</footer>
</html>
