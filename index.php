<?php
include_once("layout/header.php");

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
      session_start();
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
      session_unset();
      $TITLE = "Goodbye!";
      include_once("/logoff.php");
   break;
   default:
      $TITLE = "Home";
      include_once("/home.php");
}
include_once("layout/footer.php");
?>