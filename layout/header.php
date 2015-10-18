

<?php

include_once("db/dbConn.php");


if($_REQUEST)
   $ACTION = $_GET['Action'];
else
   $ACTION = "";

if($ACTION == 'Register'){
   $strSignUpHTML = "";
}else{
   $strSignUpHTML =  "<a href='index.php?Action=Register' >Sign Up</a>";
}

if($ACTION == 'Login'){
   $strLogInHTML = "";
}else{
   $strLogInHTML = "<a href='index.php?Action=Login' >Log In</a>";
}

//$_SESSION = "";

if(($ACTION == 'LoginSuccessful') || (isset($_SESSION))){
   $strLogInHTML = "<a href='index.php?Action=Logoff'  >Log Out</a>";
   $strSignUpHTML = "";
}else{
   $strSignUpHTML =  "<a href='index.php?Action=Register' >Sign Up</a>";
   $strLogInHTML = "<a href='index.php?Action=Login' >Log In</a>";
}
 
$strHeader = "<!DOCTYPE html>
			<html>
			 <head>
           <title>$TITLE</title>
            <link rel='stylesheet' type='text/css' href='css/header.css'>
            <script src='js/js.js'></script>
         </head>
           <header>
           <div id='bannermainhead' > 
			<h1 >VISION</h1>
			<p >We See The Future</p>
			<button type='button' id='search' onClick='jsSearchValidate()' >Search</button>
			   <input type='text' id='txtSearch'  value='search...' >
           </div>
		   <div id='bannersubhead' > 
			   <a href='sport.php' >Sport</a>
			   <a href='cellular.php' >Cell</a>
			   <a href='appliances.php' >Appliances</a>
			   $strLogInHTML
            $strSignUpHTML
			   
		   </div>
         </header>
		 
		 <body>";
		 
	echo $strHeader;

?>
