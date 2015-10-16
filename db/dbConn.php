<?php

   //CONNECTION TO DATABASE

	global $db;

	$db = new mysqli("localhost", "root", "", "store_database");

	if($db->connect_errno > 0){
      die("Unable to connect to database, " . $db->connect_error);
   }

?>