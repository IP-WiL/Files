<?php

   include_once("db/dbConn.php");
	
	class Product { 
	
   	public  $id;
      public  $name; 
      public  $price; 
      public  $quantity; 
   	public  $description; 
   	public  $imgUrl; 
   	public  $supId; 
   	public  $active; 
   	public  $catId;
   	public  $featured;	
       
      public function Product()
      {		

      }
   	
   	public function InitializeById($id){

         global $db;
   		
         //SQL Statement
   		$sqlProduct = "SELECT * FROM product WHERE Product_Id = $id";

         //Execute Query
   		if(!$rstProduct = $db->query($sqlProduct)){
   		 die("Error when running product query, " . $db->error);
   		}
   		
   		$row = $rstProduct->fetch_assoc();
   		echo "<th>".$row["Product_Name"]."</th>";  
      }
   	
      public function Save($_id, $_name, $_price, $_quantity, $_description,  $_imgUrl, $_supId, $_active, $_catId, $_featured)
      {
         $id = $_id;
   		$name = $_name; 
   		$price = $_price; 
   		$quantity = $_quantity; 
   		$description = $_description; 
   		$imgUrl = $_imgUrl; 
   		$supId = $_supId; 
   		$active = $_active; 
   		$catId = $_catId; 
   		$featured = $_featured; 
      }
   	
   	public function Show()
   	{
   		
   	}
} 
	
?>