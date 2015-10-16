<?php

include("db\dbConn.php");

global $db;

$sqlFeatured = "SELECT * FROM product WHERE featured = 1";

if(!$rstFeatured = $db->query($sqlFeatured)){
   die("Error when running featured query, " . $db->error);
}


$strFeatured = "<table>";

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




?>