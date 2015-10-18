<?php
      
   session_start();

   include("include/products.cls.php");

	$TITLE = "Sport";

	include_once("layout/header.php");

	$strHTML = "<h1>Sports</h2>";

   $sportsProducts = new Products();

	echo $strHTML . $sportsProducts->getList(1);

?>