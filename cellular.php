<?php

   session_start();

   include("include/products.cls.php");

	$TITLE = "Cellular";

	include_once("layout/header.php");

	$strHTML = "<h1>Cellular</h2>";

   $sportsProducts = new Products();

	echo $strHTML . $sportsProducts->getList(2);

?>