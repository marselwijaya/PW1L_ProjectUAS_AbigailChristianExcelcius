<?php
include("config.php");
session_start();
$message='';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script>
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "suggestionList.php?q=" + str, true);
        xmlhttp.send();
      }
    }
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> ACE Cafe </title>
  </head>
  <body class="backAll" style="font-family:fontbody; overflow-x:hidden; font-size: 1.1em; color: white">
    <div style="align: center">
      <table data-aos="fade-down"
       data-aos-easing="linear"
       data-aos-duration="1000"
       class="tablemenu" border="0" style="width=device-width, initial-scale=100%; table-layout:fixed; color:#ffffff; background-color: rgba(0,0,0, 0.1)">
        <tr style="text-align: center">
          <td style="text-align : center">
            <a href="home.php"><img src="images/LogoACECafe.png" width="20%"></a>
          </td>
        </tr>
      </table>
    </div>
    <br>

      <div data-aos="fade-up" style="transition:2s" id="Welcome">
        <center><a href="#Welcome" class="linkpart"><H1 style="font-family:fonthead">Welcome to ACE Cafe</H1></a><center>
      </div>

        <div class="container">
          <div class="row">
            <div data-aos="fade-left" style="transition:2s" class="col col-xl-4 col-lg-3 col-md-2 col-sm-1 col-1">

            </div>
            <div data-aos="fade-right" style="transition:2s; margin: auto; background-color : rgba(0,0,0,0.3)" class="col col-xl-4 col-lg-6 col-md-8 col-sm-10 col-10">
              <h4>Register your account below</h4>
              <form method="post">
                <table>
                  <tr>
                    <td>Full Name</td>
                    <td>: <input type="text" name="fullname" placeholder="Full Name" required></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td>: <input type="text" name="id" placeholder="Username" required></td>
                  </tr>
                  <tr>
                    <td>E-mail</td>
                    <td>: <input type="text" name="email" placeholder="E-mail" required></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>: <input type="password" name="password" placeholder="Password" minlength="8" required></td>
                  </tr>
                  <tr>
                    <td><input type="submit" value="Register"></td>
                  </tr>
                </table>
                <?php
                echo $message;
                ?>
              </form>
              <br>
              <br>

              <p>Already have an account?<br>
                <a href="main.php"><button name="Login">Login</button></a> here!
              </p>

              <?php
              if(isset($_POST['Register'])){
                $username=$_POST['id'];
                $password=$_POST['password'];
                $fullname=$_POST['fullname'];
                $email=$_POST['email'];
                if(empty($username) || empty($password) || empty($fullname) || empty($email)){
                  $message = 'Full Name, Username, E-mail, and Password must be filled!';
                }
                else {
                  $check = mysqli_query($con,"SELECT username FROM datapelanggan WHERE username = '$username'");
                  if(mysqli_fetch_array($check)){
                    $message = 'Username already exist. <br>';
                  }
                  else {
                    $query = "INSERT INTO datapelanggan VALUES('$fullname','$username','$email','$password')";
                    mysqli_query($con,$query);
                    $message = 'Registration Succeed!';
                    $_SESSION['login_user'] = $username;
                    header("location: home.php");
                  }
                }
              }
              ?>
            </div>
            <div data-aos="fade-left" style="transition:2s" class="col col-xl-4 col-lg-3 col-md-2 col-sm-1 col-1">

            </div>
          </div>
        </div>
        <br>
        <br>

        <div class="copyright" style="font-family: fonthead; text-align : center; font-size : 1.2em">
          <p>Copyright ©2020 - ACE Cafe<p>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <button style="background-image: url('images/BacktoTopButton.png'); background-repeat: no-repeat; background-size: 65px" onclick="topFunction()" id="myBtn" title="Back to the top of the page"></button>

    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 175px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 175 || document.documentElement.scrollTop > 175) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
  </body>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
</html>
