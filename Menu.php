<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">

    <title> ACE Cafe Menu </title>
  </head>


  <body class="backAll" style="font-family:fontbody; overflow-x:hidden; font-size: 1.1em; color: white">

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

    <div data-aos="fade-up" style="transition:2s; padding-top:5%">
      <center><a href="#Menu" class="linkpart" id="Menu"><H1 style="font-family:fonthead">Menu</H1></a><center>
    </div>

    <section class="sectionmenu">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="minuman-tab" data-toggle="tab" href="#Drinks" role="tab" aria-controls="Drinks" aria-selected="true">Drinks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="snack-tab" data-toggle="tab" href="#Snacks" role="tab" aria-controls="Snacks" aria-selected="false">Snacks</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="Drinks" role="tabpanel" aria-labelledby="minuman-tab">
              <div class="table-responsive">
                <div class="S4" align="center" style="color:white">
                  <div class="kontenS4" style="width:75%">

                      <div data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini1">
                        <table class="tablemenu">
                          <tr>
                            <td>
                            </td>
                            <td rowspan="2">
                               <a href="images/Cappucino.png" data-lightbox="image-1" data-title="Cappucino"><img src="images/Cappucino.png" height="20%" style="align:right"></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <p>Cappucino<br>
                                Rp 20.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-left"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini2">
                        <table class="tablemenu">
                          <tr>
                            <td rowspan="2">
                              <a href="images/Cookies&Cream.png" data-lightbox="image-1" data-title="Cookies & Cream Frappe"><img src="images/Cookies&Cream.png" height="20%" ></a>
                            </td>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Cookies & Cream Frappe<br>
                                Rp 25.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini3">
                        <table class="tablemenu">
                          <tr>
                            <td>
                            </td>
                            <td rowspan="2">
                              <a href="images/HotChocolate.png" data-lightbox="image-1" data-title="Hot Chocolate"><img src="images/HotChocolate.png" height="20%" ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Chocolate Frappe<br>
                                Rp 25.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-left"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini2">
                        <table class="tablemenu">
                          <tr>
                            <td rowspan="2">
                              <a href="images/BlackCaffe.png" data-lightbox="image-1" data-title="Black Coffee"><img src="images/BlackCaffe.png" height="20%" ></a>
                            </td>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Black Coffee <br>
                                Rp 18.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini3">
                        <table class="tablemenu">
                          <tr>
                            <td>
                            </td>
                            <td rowspan="2">
                              <a href="images/CoffeLatte.png" data-lightbox="image-1" data-title="Coffee Latte"><img src="images/CoffeLatte.png" height="20%" ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Coffee Latte <br>
                                Rp 18.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-left"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini2">
                        <table class="tablemenu">
                          <tr>
                            <td rowspan="2">
                              <a href="images/IcedTea.png" data-lightbox="image-1" data-title="Ice Tea"><img src="images/IcedTea.png" height="20%" ></a>
                            </td>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Ice Tea<br>
                                Rp 15.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini3">
                        <table class="tablemenu">
                          <tr>
                            <td>
                            </td>
                            <td rowspan="2">
                              <a href="images/IcedLemonTea.png" data-lightbox="image-1" data-title="Ice Lemon Tea"><img src="images/IcedLemonTea.png" height="20%" ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Ice Lemon Tea<br>
                                Rp 18.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-left"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini2">
                        <table class="tablemenu">
                          <tr>
                            <td rowspan="2">
                              <a href="images/IcedChocolate.png" data-lightbox="image-1" data-title="Ice Chocolate"><img src="images/IcedChocolate.png" height="20%" ></a>
                            </td>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Ice Chocolate<br>
                                Rp 20.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini3">
                        <table class="tablemenu">
                          <tr>
                            <td>
                            </td>
                            <td rowspan="2">
                              <a href="images/mangosmoothies.png" data-lightbox="image-1" data-title="Mango Smoothies"><img src="images/mangosmoothies.png" height="20%" ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Mango Smoothies<br>
                                Rp 20.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                      <div data-aos="fade-left"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine"
                      style="transition:1.5s" class="ini2">
                        <table class="tablemenu">
                          <tr>
                            <td rowspan="2">
                              <a href="images/AirMineral.png" data-lightbox="image-1" data-title="mineral Water"><img src="images/AirMineral.png" height="20%" ></a>
                            </td>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p>
                                Mineral Water<br>
                                Rp 10.000
                              </p>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <br>
            </div>

            <div class="tab-pane fade" id="Snacks" role="tabpanel" aria-labelledby="snack-tab">
              <div class="accordion" id="accordionExample">
                <div class="table-responsive">
                  <div class="kontenS4" style="width:75%">
                    <div data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    style="transition:1.5s" class="ini1">
                      <table class="tablemenu">
                        <tr>
                          <td>
                          </td>
                          <td>
                             <a href="images/Butter.png" data-lightbox="image-1" data-title="Butter Croissant"><img src="images/Butter.png" height="20%" ></a>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <p>Butter Croissant<br>
                            Rp 15.000
                            </p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <br>
                    <div data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    style="transition:1.5s" class="ini2">
                      <table class="tablemenu">
                        <tr>
                          <td rowspan="2">
                            <a href="images/RedVelvet.png" data-lightbox="image-1" data-title="Red Velvet"><img src="images/RedVelvet.png" height="20%" ></a>
                          </td>
                          <td>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p>Red Velvet<br>
                            Rp 20.000
                            </p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <br>
                    <div data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    style="transition:1.5s" class="ini3">
                      <table class="tablemenu">
                        <tr>
                          <td>
                          </td>
                          <td rowspan="2">
                            <a href="images/Muffin.png" data-lightbox="image-1" data-title="Muffin"><img src="images/Muffin.png" height="20%" ></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p>Muffin<br>
                            Rp 15.000
                            </p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <br>
                    <div data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    style="transition:1.5s" class="ini2">
                      <table class="tablemenu">
                        <tr>
                          <td rowspan="2">
                            <a href="images/Bolu.png" data-lightbox="image-1" data-title="Sponge Cake"><img src="images/Bolu.png" height="20%" ></a>
                          </td>
                          <td>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p>Sponge Cake<br>
                            Rp 15.000
                            </p>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <br>
                    <div data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    style="transition:1.5s" class="ini3">
                      <table class="tablemenu">
                        <tr>
                          <td>
                          </td>
                          <td rowspan="2">
                            <a href="images/Serabi.png" data-lightbox="image-1" data-title="Serabi"><img src="images/Serabi.png" height="20%" ></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p>Serabi<br>
                            Rp 18.000
                            </p>
                          </td>
                        </tr>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>

      </div>
    </section>

    <div class="copyright" style="font-family: fonthead; text-align : center; font-size : 1.2em">
      <p>Copyright ©2020 - ACE Cafe<p>
    </div>

    <script src="js/lightbox.js"></script>
    <script src="js/lightbox-plus-jquery.js"></script>
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
