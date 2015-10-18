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
               <td>". $rowProducts["Product_Price"]. "</td>
               <td>". $rowProducts2["Product_Price"]. "</td>
               <td>". $rowProducts3["Product_Price"]. "</td>
            </tr>";
               
      }

      $strProductsHTML .= "</table>";

      return $strProductsHTML;
 	}



 }


?>