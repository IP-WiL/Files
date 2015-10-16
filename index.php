<?php


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
      include_once("/register.php");
   break;
   default:
      $TITLE = "Home";
      include_once("/home.php");
}



//EVENTS

?>