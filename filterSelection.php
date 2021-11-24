<?php
        session_start();
        require 'connect.php';

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
?>
