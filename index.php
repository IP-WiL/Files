<?php

include_once("layout/header.php");
include_once("include/product.php");

if($_REQUEST)
   $ACTION = $_REQUEST['ACTION'];
else
   $ACTION = "";

//NAV
switch($ACTION){
   case "LOGIN":
      $TITLE = "LOGIN";
   break;
   case "REGISTER":
      $TITLE = "REGISTER";
   break;
   default:
      $TITLE = "Home";
      include_once("/home.php");
}



//EVENTS

include_once("layout/footer.php");




?>