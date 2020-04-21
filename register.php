<?php
$connection= mysqli_connect('localhost','root','','database_toko')
 ?>
<html>
  <head>
  </head>
  <body>
    <form method="post">
      <h4>Enter your new username </h4>
      <input type="text" name="idr">

      <h4>Enter your new password </h4>
      <input type="password" name="passr">
      <input type="submit" name="Register" value="Register">
    </form>
  </body>
</html>


<?php
if(isset($_POST['Register'])){
  $username=$_POST['idr'];
  $password=$_POST['passr'];

  $query=mysqli_query($connection, "SELECT * FROM user WHERE username='$username'");
  if(mysqli_num_rows($query)>0){
    echo "Username already exist";
  }
  else{
    $queryr=mysqli_query($connection, "INSERT INTO `user`(`username`, `password`) VALUES ('$username', '$password')");
    echo "Username and Password has been added ";
  }


}
 ?>
<a href="index.php"><button name="Login">Back to Login</button></a>
