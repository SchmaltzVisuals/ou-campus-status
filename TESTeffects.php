<?php
// Connect to database
require "connect.php";

//
//  where id='whatever the user clicked on'
$sql = "select * from parkinglots";
$result = $connect->query($sql);
// Loop through all rows in the table
while ($row = $result->fetch_assoc()){
  $numReports = $row['reports'];
  echo 'P'.$row['id'];
  echo '<br>Number of reports: '.$numReports.'<br>';

  if ($numReports >= 20) {
    //echo '<script type="text/javascript" src="/js/effects.js">';
    //echo 'document.getElementById("P'.$row['id'].'").style.backgroundColor = 'red';';
    //echo '</script>';
    echo 'i am red';
  }
  else if ($numReports >= 10) {
     echo '<script type=\"text/javascript\">
            document.getElementById("P'.$row['id'].'").style.backgroundColor = 'yellow';
            </script>';
    echo ' i am neither red nor green';
  }
  else {
    //echo '<script type="text/javascript" src="/js/effects.js">';
    //echo 'document.getElementById("P'.$row['id'].'").style.backgroundColor = 'lightgreen';';
    //echo '</script>';
    echo 'i am green';
  }





}

/*
if (activity_reports >= 20) {
  document.getElementById("P1").style.backgroundColor = 'red';
}
else if (activity_reports >= 10) {
  document.getElementById("P1").style.backgroundColor = 'yellow';
}
else {
  document.getElementById("P1").style.backgroundColor = 'lightgreen';
}
*/
?>
