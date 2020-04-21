function getReservation(){
  var retVal = confirm("Submit Reservation ?");
  if(retVal == true){
    window.location="index.html";
    return true;
  }
  else{
    return false;
  }
}
