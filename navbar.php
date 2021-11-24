<!-- Trafficker CSS -->
<link href="./sass/main.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">


<!-- Begin Navbar -->
<form action="filterSelection.php" method="post">
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
        <input type="checkbox" class="checkboxNavBar" name="parking" id="parkingCB">
        <label class="label" for="parkingCB" > Parking &nbsp;</label>
      </li>
      <!-- Dining Button -->
      <li class="checkboxNavBar">
        <input type="checkbox" class="checkboxNavBar" name="dining" id="diningCB">
        <label class="label" for="diningCB" > Dining &nbsp;</label>
      </li>
      <!-- Recreation Button -->
      <li class="checkboxNavBar">
        <input type="checkbox" class="checkboxNavBar" name="recreation" id="recreationCB">
        <label class="label" for="recreationCB" > Recreation &nbsp;</label>
      </li>
      <!-- Vending Button -->
      <li class="checkboxNavBar">
        <input type="checkbox" class="checkboxNavBar" name="vending" id="vendingCB">
        <label class="label" for="vendingCB" > Vending &nbsp;</label>
      </li>
      <!-- Printers Button -->
      <li class="checkboxNavBar">
        <input type="checkbox" class="checkboxNavBar" name="printers" id="printersCB">
        <label class="label" for="printersCB" >Printers &nbsp;</label>
      </li>
      <!-- Study Areas Button -->
      <li class="checkboxNavBar">
        <input type="checkbox" class="checkboxNavBar" name="studyAreas" id="studyAreasCB">
        <label class="label" for="studyAreasCB" > Study Areas &nbsp;</label>
      </li>
      <li>
        <input type="submit" name="submit" value="Apply Filter">
      </li>
    </ul>
  </div>
</div>
</nav>
</form>
<!-- End Navbar -->


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
