<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Trafficker CSS -->
<link href="./sass/main.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

  <title>OU Traffic</title>
</head>
<body style="background-color: grey;">

<!-- Display Parking Lot Icons -->
<?php
include "navbar.php";
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
  // If the parking lot has 20 or more reports
  if ($numReports >= 20) {
    $lotIconColor = "red";
  }
  // If the parking lot has 10 or more (but less than 20) reports
  else if ($numReports >= 10) {
    $lotIconColor = "orange";
  }
  // If the parking lot has less than 10 reports
  else {
    $lotIconColor = "lightgreen";
  }
  // If the parking lot has overnight parking, set overnightParking to yes
  if ($row['overnightParking'] == 1) {
    $overnightParking = "overnight-yes";
  } else {
    $overnightParking = "overnight-no";
  }

  // Print lot icon with these classes ("circle overnight-yes/no")
  echo '<button id="P'.$lotID.'" class="circle '.$overnightParking.' '.$numReports.' '.$lotIconColor.'" style="background-color:'.$lotIconColor.'">P'.$lotID.'</button>';
}
// Close the database connection
$connect->close();
 ?>
<!-- End Parking Lot Icons -->

<!-- Begin Modal Popup -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h1 class="modal-title" id="lotName">Example: Parking Lot P5</h1>
      <button type="button" class="btn-close"></button>
    </div>
    <!-- Modal body -->
    <div class="modal-body" id="modalBody">
      <h3 id="busyLevel">Example: BUSY</h3>
      <h6 id="busyReports">Example: 4 reports in the last hour</h6>
      <p id="lotOvernight" style="display:inline">Example: No Overnight Parking</p>
      <i id=overnightIcon></i>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-danger">Report as Busy</button>
      <button type="button" class="btn btn-secondary">Close</button>
    </div>
  </div>
</div>
<!-- End Modal Popup -->

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
