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

         $rowProducts2 = $rstProducts->fetch_assoc();
         $rowProducts3 = $rstProducts->fetch_assoc();

         $strProductsHTML .= "<tr>
               <td>". $rowProducts["Product_Name"] . "</td>
               <td>". $rowProducts3["Product_Name"] . "</td>
               <td>". $rowProducts3["Product_Name"] . "</td>
            </tr>
            <tr>
               <td><img src='".$rowProducts["ImageLocation"]."' alt='Image'></td>
               <td><img src='".$rowProducts2["ImageLocation"]."' alt='Image'></td>
               <td><img src='".$rowProducts3["ImageLocation"]."' alt='Image'></td>
            </tr>
            <tr>
               <td>R". $rowProducts["Product_Price"]. "</td>
               <td>R". $rowProducts2["Product_Price"]. "</td>
               <td>R". $rowProducts3["Product_Price"]. "</td>
            </tr>
            <tr>
               <td>". $rowProducts["Description"]. "</td>
               <td>". $rowProducts2["Description"]. "</td>
               <td>". $rowProducts3["Description"]. "</td>
            </tr>
            <tr>
               <td>Quantity: ". $rowProducts["quantity"]. "</td>
               <td>Quantity: ". $rowProducts2["quantity"]. "</td>
               <td>Quantity: ". $rowProducts3["quantity"]. "</td>
            </tr>
            <tr>
               <td><a href=''>Add to Cart</a></td>
               <td><a href=''>Add to Cart</a></td>
               <td><a href=''>Add to Cart</a></td>
            </tr>";

            ;
               
      }

      $strProductsHTML .= "</table>";

      return $strProductsHTML;
 	}



 }


?>