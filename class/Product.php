<?php
	
	include("db\dbConn.php");
	global $db;
	
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
	
	public function InitializeById($_id)
    {
        $id = $_id;
		
		$sql = "SELECT * FROM product WHERE id = $id";

		//if(!$rstFeatured = $db->query($sql))
		//{
			//die("Error when running featured query, " . $db->error);
		//}
		
		
		
		while($row = $rstFeatured->fetch_assoc())
		{

		   $row2 = $rstFeatured->fetch_assoc();
			 echo "<th>".$row["Product_Name"]."</th>";
		   
		}
    }
	
    public function Save( $_id, $_name, $_price, $_quantity, $_description,  $_imgUrl,
							 $_supId, $_active, $_catId, $_featured)
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