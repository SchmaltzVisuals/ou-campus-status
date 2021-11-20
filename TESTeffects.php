<?php
// Connect to database
require "connect.php";
//
//  where id='whatever the user clicked on'
$sql = "select * from parkinglots";
$result = $connect->query($sql);
// Loop through all rows in the table
while ($row = $result->fetch_assoc()){
  $lightReports = $row['lightReports'];
  $mediumReports = $row['mediumReports'];
  $busyReports = $row['busyReports'];

  if (hi) {

  }




}

?>



if (activity_reports >= 20) {
  document.getElementById("P1").style.backgroundColor = 'red';
}
if (activity_reports >= 10) {
  document.getElementById("P1").style.backgroundColor = 'yellow';
}
else {
  document.getElementById("P1").style.backgroundColor = 'lightgreen';
}
