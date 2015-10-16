<?php


if($_REQUEST)
   $ACTION = $_REQUEST['Action'];
else
   $ACTION = "";

//NAV
switch($ACTION){
   case "Login":
      $TITLE = "Login";
      include_once("/login.php");
   break;
   case "LoginSuccessful":
      $TITLE = "Home";
      include_once('/dashboard.php');
   break;
   case "Register":
      $TITLE = "Register";
      include_once("/register.php");
   break;
   case "RegSuccessful":
      $TITLE = "Register";
      include_once("/registerSuccess.php");
   break;
   case "Logoff":
      $TITLE = "Goodbye!";
      include_once("/logoff.php");
   break;
   default:
      $TITLE = "Home";
      include_once("/home.php");
}

?>