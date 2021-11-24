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
        include "navbar.php";
        session_start();
        require "connect.php";

        $parking = $_POST['parking'];
        $dining = $_POST['dining'];
        $recreation = $_POST['recreation'];
        $vending = $_POST['vending'];
        $printers = $_POST['printers'];
        $studyAreas = $_POST['studyAreas'];



// If parking filter is selected
if ($parking == true) {
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
}
/*
        if (!isset($_POST['checkboxname'])) {
    // checkbox was not checked...do something
} else {
    // checkbox was checked. Rock on!
}
}
*/
function CloseCon($conn)
 {
 $conn -> close();
 }
?>
