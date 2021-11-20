
var activity_reports = 6

function changebackground(){
  if (activity_reports >= 20) {
    document.getElementById("P1").style.backgroundColor = 'red';
  }
  if (activity_reports >= 10) {
    document.getElementById("P1").style.backgroundColor = 'yellow';
  }
  else {
    document.getElementById("P1").style.backgroundColor = 'lightgreen';
  }
}
changebackground()
