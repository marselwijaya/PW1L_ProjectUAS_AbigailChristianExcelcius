<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="js/javascript.js">

    </script>
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

    <title> Contact ACE Cafe </title>
  </head>
  <body class="backAll" style="font-family:fontbody; overflow-x:hidden; font-size: 1.1em; color:#ffffff">
    <div style="align: center">
      <table id="Home" data-aos="fade-down"
       data-aos-easing="linear"
       data-aos-duration="1000"
       class="tablemenu" border="0" style="width=device-width, initial-scale=100%; table-layout:fixed; color:#ffffff; background-color: rgba(0,0,0, 0.1)">
        <tr style="text-align: center">
          <td style="text-align : left">
            <a href="home.php"><img src="images/LogoACECafe.png" width="130%"></a>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu" href="home.php">Home</a>
            </ul></b>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu" href="AboutUs.php">About&nbsp;Us</a>
              </li>
            </ul></b>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu" href="Menu.php">Menu</a>
              </li>
            </ul></b>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu" href="Location.php">Location</a>
              </li>
            </ul></b>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu" href="ContactUs.php">Contact&nbsp;Us</a>
              </li>
            </ul></b>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu" href="Logout.php">Logout</a>
              </li>
            </ul></b>
          </td>
          <td class="menuoption"><b>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="menu"><input type="text" onkeyup="showHint(this.value)" placeholder="Search"></a>
                <p><span id="txtHint"></span></p>
              </li>
            </ul></b>
          </td>
        </tr>
      </table>
    </div>
    <br>
    <section class="part2contact" id="ContactUs">
        <div data-aos="zoom-in" style="transition:2s; padding-top:7%">
            <center><a href="#ContactUs" class="linkpart"><H1 style="font-family:fonthead">Contact Us</H1></a><center>
        </div>
    </section>

    <section class="sectioncontact">
      <div class="container">
        <div class="row">
          <div class="col col-lg-2 col-md-2 col-sm-2 col-2">

          </div>
          <div class="col col-lg-8 col-md-8 col-sm-8 col-8">
            <center>
              <p>
                Should you have any questions, concerns, critics, or advices, you can contact and reach us by
                any of our social media, contact number, or email, available below
              </p>
            </center>
          </div>
          <div class="col col-lg-2 col-md-2 col-sm-2 col-2">

          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
            <center>
              <a href="tel:081212010633"><img src="images/telephonebutton.png" class="imagecontact" alt="Telephone Icon" title="Phone Number" style="width:35%"></a>
              <br>
              <a href="tel:081212010633" class="linkpart">+62 81212 010 633</a>
            </center>
          </div>
          <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
            <center>
              <a href="https://wa.me/6281212010633" target="_blank"><img src="images/whatsapp.png" class="imagecontact" alt="Whatsapp Icon" title="Whatsapp Number" style="width:35%"></a>
              <br>
              <a href="https://wa.me/6281212010633" class="linkpart">+62 81212 010 633</a>
            </center>
          </div>
          <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
            <center>
              <a href="mailto:acecafe@gmail.com"><img src="images/envelope.png" class="imagecontact" alt="E-mail Icon" title="E-mail Address" style="width:35%"></a>
              <br>
              <a href="mailto:acecafe@gmail.com" class="linkpart">acecafe@gmail.com</a>
            </center>
          </div>
          <div class="col col-lg-3 col-md-3 col-sm-6 col-6">
            <center>
              <a href="https://www.instagram.com/acecafe.id/" target="_blank"><img src="images/instagram.png" class="imagecontact" alt="Instagram Icon" title="Instagram Account" style="width:35%"></a>
              <br>
              <a href="https://www.instagram.com/acecafe.id/" class="linkpart" target="_blank">@acecafe.id</a>
            </center>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </section>

    <div class="bawahcontact"></div>

    <section class="part3contact">
      <div data-aos="zoom-in" style="transition:2s; padding-top:7%">
        <center><a href="#Reservation" class="linkpart" id="Reservation"><H1 style="font-family:fonthead">Reservation</H1></a><center>
      </div>
    </section>

    <section class="sectionreserve">
      <div class="container">
        <div class="row">
          <div class="col col-lg-2 col-md-2 col-sm-2 col-2">

          </div>
          <div class="col col-lg-8 col-md-8 col-sm-8 col-8">
            <center>
              <p>
                If you have any request, make a reservation or pre-order, you can reach us through our
                Whatsapp or email as shown above, or through our reservation form below
              </p>
            </center>
          </div>
          <div class="col col-lg-2 col-md-2 col-sm-2 col-2">

          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <form name="ReservationForm" method="post">
              <div class="form-row">
                <div class="col">

                </div>
                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-8">
                  <label for="inputName">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Name" id="inputName">
                </div>
                <div class="col">

                </div>
              </div>
              <div class="form-row">
                <div class="col">

                </div>
                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-8">
                  <label for="inputEmail4">Email Address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address" id="inputEmail4">
                </div>
                <div class="col">

                </div>
              </div>
              <div class="form-row">
                <div class="col">

                </div>
                <div class="form-group col-lg-8 col-md-8 col-sm-8 col-8">
                  <label for="inputPhoneNumber">Phone Number</label>
                  <input type="text" name="pnumber" class="form-control" placeholder="Phone Number" id="inputPhoneNumber">
                </div>
                <div class="col">

                </div>
              </div>
              <div class="form-row">
                <div class="col">

                </div>
                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-5">
                  <label for="FormControlTextarea1">Notes / Request</label>
                  <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group col-lg-3 col-md-3 col-sm-3 col-3">
                  <label for="inputNoofPax">No. of Pax</label>
                  <select id="inputNoofPax" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>> 10</option>
                  </select>
                </div>
                <div class="col">

                </div>
              </div>
              <div class="form-row">
                <div class="col">

                </div>
                <div class="col col-lg-8 col-md-8 col-sm-8 col-8">
                  <input type="button" class="btn btn-primary" value="Submit" onclick="getReservation();"/>
                </div>
                <div class="col">

                </div>
              </div>
            </form>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
    </section>

    <div class="copyright" style="font-family: fonthead; text-align : center">
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
