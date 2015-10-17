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
   	
   	public function InitializeById($id)
	{
         global $db;
   		
         //SQL Statement
   		$sqlProduct = "SELECT * FROM product WHERE Product_Id = $id";

         //Execute Query
   		if(!$rstProduct = $db->query($sqlProduct)){
   		 die("Error when running product query, " . $db->error);
   		}
   		
   		$row = $rstProduct->fetch_assoc();
		
		$this->id = $id;
		$this->name = $row["Product_Name"];
		$this->supId = $row["Sup_Id"];
		$this->description = $row["Description"];
		$this->price = $row["Product_Price"];
		$this->active = $row["active"];
		$this->featured = $row["featured"];
      }
   	
      public function Save($tid, $tname, $tprice, $tquantity, $tdescription,  $timgUrl, $tsupId, $tactive, $tcatId, $tfeatured)
      {
        $this->id = $tid;
   		$this->name = $tname; 
   		$this->price = $tprice; 
   		$this->quantity = $tquantity; 
   		$this->description = $tdescription; 
   		$this->imgUrl = $timgUrl; 
   		$this->supId = $tsupId; 
   		$this->active = $tactive; 
   		$this->catId = $tcatId; 
   		$this->featured = $tfeatured; 
      }
   	
   	public function Show()
   	{
   		echo "<th>".$this->id."</th> ";
		echo "<th>".$this->name."</th> ";
		echo "<th>".$this->supId."</th> ";
		echo "<th>".$this->description."</th> ";
		echo "<th>".$this->price."</th> ";
		echo "<br>";
   	}
} 
	
?>