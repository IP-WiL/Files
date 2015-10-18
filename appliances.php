<?php

   session_start();

   include("include/products.cls.php");

	$TITLE = "Appliances";

	include_once("layout/header.php");

	$strHTML = "<h1>Appliances</h2>";

   $sportsProducts = new Products();

	echo $strHTML . $sportsProducts->getList(3);

?>