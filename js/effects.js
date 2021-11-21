// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("circle");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
for (let i = 0; i < 29; i++){
  btn[i].onclick = function(){
    modal.style.display = "block";
    // Store the id of the button clicked
    var id = document.getElementsByClassName("circle")[i].id;
    // Insert the Parking Lot name into the modal
    document.getElementById("lotName").innerHTML = "Parking Lot " + id;
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
