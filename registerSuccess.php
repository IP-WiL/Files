<html>
<head>
<link rel="stylesheet" type="text/css" href="css/registerSuccess.css"/>
</head>
<?php

   include_once("layout/header.php");

	$strHTML = "<h2>Registration Successful!<h2>
				<p>Thank you for signing up with Vision.</p>
            <p>Login</p> <a href='index.php?Action='Login'>here</a><p> to begin.</p>";

	echo $strHTML;

   include_once("layout/footer.php");

?>
</html>