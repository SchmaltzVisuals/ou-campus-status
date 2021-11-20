


function changeBackground(activity_reports, id){
  if (activity_reports >= 20) {
    document.getElementById("P" + id).style.backgroundColor = 'red';
  }
  if (activity_reports >= 10) {
    document.getElementById("P" + id).style.backgroundColor = 'yellow';
  }
  else {
    document.getElementById("P" + id).style.backgroundColor = 'lightgreen';
  }
}
changeBackground()
