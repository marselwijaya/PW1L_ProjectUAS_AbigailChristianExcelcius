function getReservation(){
  var retVal = confirm("Submit Reservation ?");
  if(retVal == true){
    window.location="home.php";
    return true;
  }
  else{
    return false;
  }
}
