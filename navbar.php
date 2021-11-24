<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<!-- Trafficker CSS -->
<link href="./sass/main.css" rel="stylesheet">

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
      <li class="checkboxNavBar">
        <input type="checkbox" class="checkboxNavBar" id="parkingCB">
        <label class="label" for="parkingCB" > Parking &nbsp;</label>
      </li>

      <!-- Dining Button -->
      <li class="checkboxNavBar">
        <input type="checkbox">
      </li>
      <li class="nav-item">
        <a class="nav-link">Dining</a>
      </li>
      <!-- Recreation Button -->
      <li class="checkboxNavBar">
        <input type="checkbox">
      </li>
      <li class="nav-item">
        <a class="nav-link">Recreation</a>
      </li>
      <!-- Vending Button -->
      <li class="checkboxNavBar">
        <input type="checkbox">
      </li>
      <li class="nav-item">
        <a class="nav-link">Vending</a>
      </li>
      <!-- Printers Button -->
      <li class="checkboxNavBar">
        <input type="checkbox">
      </li>
      <li class="nav-item">
        <a class="nav-link">Printers</a>
      </li>
      <!-- Study Areas Button -->
      <li class="checkboxNavBar">
        <input type="checkbox">
      </li>
      <li class="nav-item">
        <a class="nav-link">Study Areas</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- End Navbar -->
