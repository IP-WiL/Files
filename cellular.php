<html>
<head>
<link rel="stylesheet" type="text/css" href="css/cellular.css"/>
</head>
<?php

   session_start();

   include("include/products.cls.php");

	$TITLE = "Cellular";

	include_once("layout/header.php");

	$strHTML = "<h1>Cellular</h1>";

   $sportsProducts = new Products();

	echo $strHTML . $sportsProducts->getList(2);

?>
</html>