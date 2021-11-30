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

      <?php
        session_start();
        require 'connect.php';
        $parking = $_POST['parking'];
        $dining = $_POST['dining'];
        $recreation = $_POST['recreation'];
        $vending = $_POST['vending'];
        $printers = $_POST['printers'];
        $studyAreas = $_POST['studyAreas'];

        if (!isset($_SESSION['welcome'])) {
          echo '<script>welcomeMessage()</script>';
          $_SESSION['welcome'] = "ran";
        }

        // Begin parking lot filter
        if ($parking == true) {
        // Set Parking filter to CHECKED
        $parkingChecked = "checked";
        // Select all columns from the parkinglots table in the database
        $sql = "select * from parkinglots";
        $result = $connect->query($sql);
        // Loop through all rows in the table
        while ($row = $result->fetch_assoc()){
          // Save the parking lot number and number of reports as variables
          $numReports = $row['reports'];
          $lotID = $row['id'];
          // If the parking lot has 5 or more reports
          if ($numReports >= 5) {
            $lotIconColor = "red";
          }
          // If the parking lot has 1 or more (but less than 20) reports
          else if ($numReports >= 1) {
            $lotIconColor = "orange";
          }
          // If the parking lot has less than 1 reports
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
          echo '<button id="P'.$lotID.'" class="icon circle '.$overnightParking.' '.$numReports.' '.$lotIconColor.'" style="background-color:'.$lotIconColor.'">P'.$lotID.'</button>';
        }
      }
        // End parking lot filter

        // Begin dining filter
        if ($dining == true) {
        // Set Dining filter to CHECKED
        $diningChecked = "checked";
        // Select all columns from the dining table in the database
        $sql = "select * from dining";
        $result = $connect->query($sql);
        // Loop through all rows in the table
        while ($row = $result->fetch_assoc()){
          // Save the parking lot number and number of reports as variables
          $numReports = $row['reports'];
          $diningID = $row['id'];
          $diningName = $row['name'];
          // If the dining location has 5 or more reports
          if ($numReports >= 5) {
            $diningIconColor = "red";
          }
          // If the dining location has 1 or more (but less than 20) reports
          else if ($numReports >= 1) {
            $diningIconColor = "orange";
          }
          // If the dining location has less than 1 reports
          else {
            $diningIconColor = "lightgreen";
          }
          // Print dining icon
          echo '<button id="Dining'.$diningID.'" class="icon diningCircle '.$diningName.' '.$numReports.' '.$diningIconColor.'"  style="background-color:'.$diningIconColor.'"><img src="images/dining_black.png" class="diningIcon"></button>';
        }
        }
        // End dining filter


       // Begin Rec Filter
       if ($recreation == true) {
       // Set rec filter to CHECKED
       $recChecked = "checked";
       // Select all columns from the recreation table in the database
          $sql = "select * from recreation";
          $result = $connect->query($sql);
          // Loop through all rows in the table
          while ($row = $result->fetch_assoc()){
            // Save the recreation area and number of reports as variables
            $numReports = $row['reports'];
            $recID = $row['id'];
            $recName = $row['name'];
            // If the rec location has 5 or more reports
            if ($numReports >= 5) {
              $recIconColor = "red";
            }
            // If the recreation location has 1 or more (but less than 20) reports
            else if ($numReports >= 1) {
              $recIconColor = "orange";
            }
            // If the recreation location has less than 1 reports
            else {
              $recIconColor = "lightgreen";
            }
            // Print rec icon
            echo '<button id="rec'.$recID.'" class="icon recCircle '.$recName.' '.$numReports.' '.$recIconColor.'" style="background-color:'.$recIconColor.'"><img src="images/dumbbell.png" class="recIcon"></button>';
          }
          }
          // End Rec Fitler



          // Begin Study Filter
          if ($studyAreas == true) {
          // Set study filter to CHECKED
          $studyChecked = "checked";
          // Select all columns from the study areas table in the database
             $sql = "select * from study";
             $result = $connect->query($sql);
             // Loop through all rows in the table
             while ($row = $result->fetch_assoc()){
               // Save the parking lot number and number of reports as variables
               $numReports = $row['reports'];
               $studyID = $row['id'];
               $studyName = $row['name'];
               // If the dining location has 5 or more reports
               if ($numReports >= 5) {
                 $studyIconColor = "red";
               }
               // If the recreation location has 1 or more (but less than 20) reports
               else if ($numReports >= 1) {
                 $studyIconColor = "orange";
               }
               // If the recreation location has less than 1 reports
               else {
                 $studyIconColor = "lightgreen";
               }
               // Print study icon
               echo '<button id="study'.$studyID.'" class="icon studyCircle '.$studyName.' '.$numReports.' '.$studyIconColor.'" style="background-color:'.$studyIconColor.'"><img src="images/book.png" class="studyIcon"></button>';
             }
             }
          // End Study Fitler


       $connect -> close();
       ?>
       <!-- End Filter -->


  <!-- Begin Navbar -->
  <form action="#" method="post">
  <nav class="navbar navbar-dark bg-dark fixed-top">
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
        <li class="checkboxNavBar">
          <input type="checkbox" class="checkboxNavBar" name="parking" id="parkingCB" value="true" <?=$parkingChecked?>>
          <label class="label" for="parkingCB" > Parking &nbsp;</label>
        </li>
        <!-- Dining Button -->
        <li class="checkboxNavBar">
          <input type="checkbox" class="checkboxNavBar" name="dining" id="diningCB" value="true" <?=$diningChecked?>>
          <label class="label" for="diningCB" > Dining &nbsp;</label>
        </li>
        <!-- Recreation Button -->
        <li class="checkboxNavBar">
          <input type="checkbox" class="checkboxNavBar" name="recreation" id="recreationCB" value="true" <?=$recChecked?>>
          <label class="label" for="recreationCB" > Recreation &nbsp;</label>
        </li>
        <!-- Vending Button -->
        <li class="checkboxNavBar">
          <input type="checkbox" class="checkboxNavBar" name="vending" id="vendingCB" value="true" <?=$vendingChecked?>>
          <label class="label" for="vendingCB" > Vending &nbsp;</label>
        </li>
        <!-- Printers Button -->
        <li class="checkboxNavBar">
          <input type="checkbox" class="checkboxNavBar" name="printers" id="printersCB" value="true" <?=$printersChecked?>>
          <label class="label" for="printersCB" > Printers &nbsp;</label>
        </li>
        <!-- Study Areas Button -->
        <li class="checkboxNavBar">
          <input type="checkbox" class="checkboxNavBar" name="studyAreas" id="studyAreasCB" value="true" <?=$studyChecked?>>
          <label class="label" for="studyAreasCB" > Study Areas &nbsp;</label>
        </li>
        <li class="checkboxNavBar">
         <label class="label" for="timeFilter" > Choose your preferred time &nbsp;</label>
         <br>
         <select id="timeFilter" name="timeFilter">
           <option value="7a-8a">7:00AM-8:00AM</option>
           <option value="8a-9a">8:00AM-9:00AM</option>
           <option value="9a-10a">9:00AM-10:00AM</option>
           <option value="10a-11a">10:00AM-11:00AM</option>
           <option value="11a-12p">11:00AM-12:00PM</option>
           <option value="12a-1p">12:00PM-1:00PM</option>
           <option value="1p-2p">1:00PM-2:00PM</option>
           <option value="2p-3p">2:00PM-3:00PM</option>
           <option value="3p-4p">3:00PM-4:00PM</option>
           <option value="4p-5p">4:00PM-5:00PM</option>
           <option value="5p-6p">5:00PM-6:00PM</option>
           <option value="6p-7p">6:00PM-7:00PM</option>
           <option value="7p-8p">7:00PM-8:00PM</option>
           <option value="8p-9p">8:00PM-9:00PM</option>
           <option value="9p-10p">9:00PM-10:00PM</option>
           <option value="10p-11p">10:00PM-11:00PM</option>
           <option value="11p-12a">11:00pm-12:00AM</option>
           <option value="12a-1a">12:00AM-1:00AM</option>
           <option value="1a-2a">1:00AM-2:00AM</option>
       </select>
       </li>
       <li><br>
         <input type="submit" class="btn btn-primary" name="submit" value="Apply Filter">
       </li>
      </ul>
    </div>
  </div>
  </nav>
  </form>
  <!-- End Navbar -->

<!-- Begin Modal Popup -->
<form action="report.php" method="post">
<div id="myModal" class="modal">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h1 class="modal-title" id="entityName">Example: Parking Lot P5</h1>
      <button type="button" class="btn-close"></button>
    </div>
    <!-- Modal body -->
    <div class="modal-body" id="modalBody">
      <h3 id="busyLevel">Example: BUSY</h3>
      <h6 id="busyReports">Example: 4 reports in the last hour</h6>
      <p id="lotOvernight" style="display:inline"></p>
      <i id=overnightIcon></i>
      <input type="hidden" id="entityType" name="entityType">
      <input type="hidden" id="entityId" name="entityId">
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="submit" class="btn btn-success" name="reportButton" value="notbusy">Report as Not Busy</button>
      <button type="submit" class="btn btn-danger" name="reportButton" value="busy">Report as Busy</button>
      <button type="button" class="btn btn-secondary">Close</button>
    </div>
  </div>
</div>
</form>
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
