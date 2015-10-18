<?php

	include_once("layout/header.php");

	if(isset($_GET)){

		$_SESSION["id"] = $_GET["id"];
		echo $_SESSION["id"];
	}

	//USERS ORDERS GO HERE
	$sqlUser = "SELECT * FROM customer WHERE Customer_Id = ". $_SESSION["id"];

	$rstUser = $db->query($sqlUser);

	$strHTML = "";

	include_once("layout/footer.php");


?>