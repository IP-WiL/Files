<?php

   //CONNECTION TO DATABASE

	$db = new mysqli("localhost", "root", "", "db_store");

	if($db->connect_errno > 0){
      die("Unable to connect to database, " . $db->connect_error);
   }

?>