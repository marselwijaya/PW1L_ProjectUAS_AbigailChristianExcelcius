<?php
include("config.php");
session_start();
$message='';
?>
<!DOCTYPE html>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <form method="post">
      <h4>Enter your username </h4>
      <input type="text" name="id">

      <h4>Enter your password </h4>
      <input type="password" name="pass">
      <input type="submit" name="Login" value="Login">
    </form>

    <a href="register.php"><button name="Register">Register</button></a>

<?php
if(isset($_POST['Login'])){
  $username=$_POST['id'];
  $password=$_POST['pass'];
  if(empty($username) || empty($password)){
    $message = 'Username and Password must be filled!';
  }
  $sql = "SELECT username,password FROM datapelanggan WHERE
          username='$username' AND password='$password'";
  $query=mysqli_query($con,$sql);
  $rows=mysqli_num_rows($query);
  if($rows==1){
    $message = "Login Succeed!";
    $_SESSION['login_user'] = $username;
    header("location: home.php");
  }
}
?>

</body>
</html>
