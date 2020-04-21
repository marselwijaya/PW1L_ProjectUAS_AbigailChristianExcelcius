<?php
// Array with names
$a[] = "About Us";
$a[] = "Contact Us";
$a[] = "Location";
$a[] = "Menu";
$a[] = "Home";
$a[] = "Minuman";
$a[] = "Snack";
$a[] = "Cappucino";
$a[] = "Cookies and Cream Frappe";
$a[] = "Chocolate Frappe";
$a[] = "Black Coffee";
$a[] = "Butter Croissant";
$a[] = "Red Velvet";
$a[] = "Muffin";
$a[] = "Bolu";
$a[] = "Serabi";

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
