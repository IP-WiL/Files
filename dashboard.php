<html>
<head>
<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
</head>
<?php

	include_once("layout/header.php");

	if(isset($_GET)){

		$_SESSION["id"] = $_GET["id"];
	}

	$ID = $_SESSION["id"];

	//USERS ORDERS GO HERE
	$sqlUser = "SELECT * FROM customer WHERE Customer_Id = $ID";

	$rstUser = $db->query($sqlUser);

	$rowUser = $rstUser->fetch_assoc();


	$strHTML = "<h2>Welcome, " . $rowUser["FName"] . "</h2>
		<p>These are your current orders:<p>";

	$sqlOrders = "SELECT Price, Date, customer_order.Quantity, Product_Name
						FROM customer_order INNER JOIN product ON customer_order.Prod_Id = Product_Id
						WHERE Cus_ID = $ID";

	$sqlDelivered = "SELECT delivery.Price, Delivery_Date, Delivery_Quantity, Product_Name
							FROM delivery INNER JOIN customer_order ON delivery.Ord_Id = customer_order.Order_Id
							INNER JOIN product ON customer_order.Prod_Id = Product_Id
							WHERE delivery.Cus_ID = $ID";

	if(!$rstOrders = $db->query($sqlOrders)){
		die("Error when running order query, " . $db->error);
	}

	if(!$rstDelivered = $db->query($sqlDelivered)){
		die("Error when running the delivered query, " . $db->error);
	};

	$strOrdersHTML = "<table id='dashboardTbl'>
					<tr>
						<th>Product Name</th>
						<th>Price</th>
						<th>Date</th>
						<th>Quantity</th>
						<th>Status</th>
					</tr>";

	while($rowOrders = $rstOrders->fetch_assoc()){
		$strOrdersHTML .= "<tr>
				<td>" . $rowOrders["Product_Name"] . "</td>
				<td>" . $rowOrders["Price"] . "</td>
				<td>" . $rowOrders["Date"] . "</td>
				<td>" . $rowOrders["Quantity"] . "</td>
				<td>Ordered</td>
			</tr>";
	}

	while($rowDelivered = $rstDelivered->fetch_assoc()){
		$strOrdersHTML .= "<tr>
		<td>" . $rowDelivered["Product_Name"] . "</td>
				<td>" . $rowDelivered["Price"] . "</td>
				<td>" . $rowDelivered["Delivery_Date"] . "</td>
				<td>" . $rowDelivered["Delivery_Quantity"] . "</td>
				<td>Delivered</td>
			</tr>";
	}


	$strOrdersHTML .= "</table>";

	echo $strHTML;
	echo $strOrdersHTML;

	include_once("layout/footer.php");


?>
</html>