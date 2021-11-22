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

    // Check if the button has the "overnight-yes" class
    if (btn[i].classList.contains("overnight-yes") == true) {
      // If true, print "Overnight Parking Allowed" in the modal
      document.getElementById("lotOvernight").innerHTML = "Overnight Parking Allowed";
    } else {
      // If false, print "No Overnight Parking" in the modal
      document.getElementById("lotOvernight").innerHTML = "No Overnight Parking";
    }

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
