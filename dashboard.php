<?php

	include_once("layout/header.php");

	session_start();

	$_SESSION['Start'] = "OMG A SESSION";

	echo $_SESSION['Start'];

	include_once("layout/footer.php");


?>