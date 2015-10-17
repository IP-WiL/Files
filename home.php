<?php

include_once("layout/header.php");
include_once("include/product.php");
include_once("include/shoppingcart.php");

global $db;

$sqlFeatured = "SELECT * FROM product WHERE featured = 1";

if(!$rstFeatured = $db->query($sqlFeatured)){
   die("Error when running featured query, " . $db->error);
}


$strFeatured = "<table id='featuredTable'>";

while($row = $rstFeatured->fetch_assoc()){

   $row2 = $rstFeatured->fetch_assoc();
   $row3 = $rstFeatured->fetch_assoc();

   $strFeatured .=
   "<tr>
      <th>".$row["Product_Name"]."</th>
      <th>".$row2["Product_Name"]."</th>
      <th>".$row3["Product_Name"]."</th>
   </tr>
   <tr>
      <td>Item Image</td>
      <td>Item Image</td>
      <td>Item Image</td>
   </tr>
   <tr>
      <td>".$row["Product_Price"]."</td>
      <td>".$row2["Product_Price"]."</td>
      <td>".$row3["Product_Price"]."</td>
   </tr>";

}

$strFeatured .= "</table>";

echo $strFeatured;

	$shoppingcart = new ShoppingCart;

   $product = new Product;
   $product->InitializeById(2);
   //$product->Show();
   
   $shoppingcart->AddProduct($product);
   
   $product = new Product;
   $product->InitializeById(3);
   //$product->Show();
   
   $shoppingcart->AddProduct($product);
   
   $shoppingcart->ShowProducts();
   
   
   
	
include_once("layout/footer.php");

?>