<?php

	include_once("layout/header.php");

	echo "<h1>Goodbye! KILL THE SESSION</h2>";

	session_unset();

	include_once("layout/footer.php");


?>