// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("circle");

// Get the X button that closes the modal
var exit = document.getElementsByClassName("btn-close")[0];

// Get the grey close button that closes the modal
var close = document.getElementsByClassName("btn-secondary")[0];

// When the user clicks on the button, open the modal
for (let i = 0; i < 29; i++){
  btn[i].onclick = function(){
    // Open the modal
    modal.style.display = "block";

    // Insert the Parking Lot name into the modal by finding the id of the button pressed
    document.getElementById("lotName").innerHTML = "Parking Lot " + document.getElementsByClassName("circle")[i].id;

    // Begin Busy Level
    var numberOfReports = btn[i].classList[2]; // Number of reports on parking lot
    var textColor = btn[i].classList[3]; // Color of parkinglot icon (used for number of reports in modal)
    var busyLevelElement = document.getElementById("busyLevel"); // Busy Level will be printed here
    var busyReports = document.getElementById("busyReports"); // Number of reports will be printed here
    // Check busy level of the lot
    if (textColor == "red") { // If lot is red, set busy level to BUSY
      var busyLevel = "BUSY";
    } else if (textColor == "orange") { // If lot is orange, set busy level to SOMEWHAT BUSY
      var busyLevel = "SOMEWHAT BUSY";
    } else if (textColor == "lightgreen") { // If lot is green, set busy level to NOT BUSY
      var busyLevel = "NOT BUSY";
    }
    // Print busy level and change the text color to match the parking lot icon
    busyLevelElement.innerHTML = busyLevel;
    busyLevelElement.style.color = textColor;
    // Print number of reports and change the text color to match the parking lot icon
    busyReports.innerHTML = numberOfReports + " reports in the last hour";
    busyReports.style.color = textColor;
    // End Busy Level

    // Begin Overnight Parking
    // Clear the existing overnight parking icon
    var iconElement = document.getElementById("overnightIcon");
    iconElement.removeAttribute('class');
    // Check if the button has the "overnight-yes" class
    if (btn[i].classList.contains("overnight-yes") == true) {
      // If true, print "Overnight Parking Allowed" in the modal
      document.getElementById("lotOvernight").innerHTML = "Overnight Parking Allowed";
      // Set the overnight parking icon to green checkmark
      iconElement.classList.add("bi-check-circle-fill");
      iconElement.style.color = 'green';
    } else if (btn[i].classList.contains("overnight-no") == true) {
      // If false, print "No Overnight Parking" in the modal
      document.getElementById("lotOvernight").innerHTML = "No Overnight Parking";
      // Set the overnight parking icon to red X
      iconElement.classList.add("bi-x-circle-fill");
      iconElement.style.color = 'red';
    }
    // End Overnight Parking
  }
}

// When the user clicks on (x), close the modal
exit.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks on CLOSE, close the modal
close.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
