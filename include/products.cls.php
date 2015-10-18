<html>
<head>
<link rel="stylesheet" type="text/css" href="css/productsc.css"/>
</head>
<?php
include_once("db/dbConn.php");

class Products {

 	function __construct(){

 	}

 	function getList($ID){

      global $db;

 		$strProductsHTML = "<table class='ProductsTbl'>";

   	$sqlProducts = "SELECT * 
   					 FROM product
                   WHERE refCategoryId = $ID and active = 1";

      $rstProducts = $db->query($sqlProducts);

      while($rowProducts = $rstProducts->fetch_assoc()){



         $strProductsHTML .= "
            <tr>
               <td>". $rowProducts["Product_Name"] . "</td>
               <td><img src='".$rowProducts["ImageLocation"]."' alt='Image'></td>
               <td>R". $rowProducts["Product_Price"]. "</td>
               <td>". $rowProducts["Description"]. "</td>
               <td>Quantity: <input type=text id='strQuantity' value='". $rowProducts["quantity"]. "' readonly></td>
               <td><a href='".basename($_SERVER['PHP_SELF'])."/ProductID=".$rowProducts["Product_Id"]."'>Add to Cart</a></td>
            </tr>";

            ;
               
      }

      $strProductsHTML .= "</table>";

      return $strProductsHTML;
 	}



 }


?>
</html>
