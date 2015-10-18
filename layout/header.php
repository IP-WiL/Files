<?php

include_once("db/dbConn.php");

if($_REQUEST)
   $ACTION = $_GET['Action'];
else
   $ACTION = "";

if($ACTION == 'Register'){
   $strSignUpHTML = "";
}else{
   $strSignUpHTML =  "<a href='index.php?Action=Register' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;
                     text-align:center; border:0px;font-family: Arial; '>Sign Up</a>";
}

if($ACTION == 'Login'){
   $strLogInHTML = "";
}else{
   $strLogInHTML = "<a href='index.php?Action=Login' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;  text-align:center; border:0px;font-family: Arial; '>Log In</a>";
}

//$_SESSION = "";

if(($ACTION == 'LoginSuccessful') || (isset($_SESSION))){
   $strLogInHTML = "<a href='index.php?Action=Logoff' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;
                  text-align:center; border:0px;font-family: Arial; '>Log Out</a>";
   $strSignUpHTML = "";
}else{
   $strSignUpHTML =  "<a href='index.php?Action=Register' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;
                     text-align:center; border:0px;font-family: Arial; '>Sign Up</a>";
   $strLogInHTML = "<a href='index.php?Action=Login' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;
                  text-align:center; border:0px;font-family: Arial; '>Log In</a>";
}
 
$strHeader = "<!DOCTYPE html>
			<html>
			 <head>
           <title>$TITLE</title>
            <link rel='stylesheet' type='text/css' href='css/css.css'>
            <script src='js/js.js'></script>
         </head>
           <header>
           <div id='bannermainhead' style=' width: 100%; height: 280px; background: linear-gradient(#330066, #452899); '> 
			<h1 style=' color:#ffffff; font-size:140px; text-align: center;font-family: Arial;margin-top: 0;'>VISION</h1>
			<p style=' color:#ffffff; font-size:33px; text-align: center; margin-top: -80px; font-family: Arial;'>We See The Future</p>
           </div>
		   <div id='bannersubhead' style=' width: 100%; height: 80px;background-color:#ffffff; align:center; '> 
			   <a href='sport.php' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;  text-align:center; border:0px;font-family: Arial; '>Sport</a>
			   <a href='cellular.php' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;  text-align:center; border:0px;font-family: Arial; '>Cell</a>
			   <a href='appliances.php' style='float:left;line-height: 80px; width: 14.285%; height: 80px; background-color:#3399CC;font-size:20px;  text-align:center; border:0px;font-family: Arial; '>Appliances</a>
			   $strLogInHTML
            $strSignUpHTML
			   <button type='button' onClick='jsSearchValidate()' style='float:left; width: 14.285%; height: 80px;background-color:#3399CC    ;font-size:20px; border:0px;font-family: Arial; '>Search</button>
			   <input type='text' id='txtSearch' style='float:left;line-height: 80px; width: 14.285%; height: 78px; font-size:20px;  text-align:center; border:0px;font-family: Arial;' value='search...' >
		   </div>
         </header>
		 
		 <body>";
		 
	echo $strHeader;

?>