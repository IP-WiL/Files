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
	
	//For Cart
	public  $purchasedAmount = 0;

       
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
	  
	  public function SetPurchasedAmount($amt)
	  {
		  $this->purchasedAmount = $amt;
	  }
   	
      public function Insert( $tdescription,$tname, $tsupId,$tprice, $tquantity, $timgUrl, $tcatId, $tactive, $tfeatured)
      {
		 //SQL Statement
   		$sqlProduct = "INSERT INTO product(Description,Product_Name,Sup_Id,Product_Price,refcategoryid,active,featured) 
					   VALUES(".$tdescription.",".$tname.",".$tsupId.",".$tprice.",".$tcatId."".$tactive.",".$tfeatured.")";

         //Execute Query
   		if(!$rstProduct = $db->query($sqlProduct)){
   		 die("Error when running product query, " . $db->error);
   		}
      }
	  
	  public function Update($tdescription,$tname, $tsupId,$tprice, $tquantity, $timgUrl, $tcatId, $tactive, $tfeatured)
	  {
		   //SQL Statement
   		$sqlProduct = "UPDATE product Description=".$tdescription.",Product_Name=".$tname.",Sup_Id=".$tsupId.",Product_Price=".$tprice.",refcategoryid=".$tcatId.
					  ",active=".$tactive.",featured=".$tfeatured." WHERE product_id=".$this->id;

         //Execute Query
   		if(!$rstProduct = $db->query($sqlProduct)){
   		 die("Error when running product query, " . $db->error);
   		}
		  
	  }
	  
	 public function GetId()
	 {
		 return $this->id;
	 }
   	
   	public function ShowInStore()
   	{
   		echo "<th>".$this->id."</th> ";
		echo "<th>".$this->name."</th> ";
		echo "<th>".$this->supId."</th> ";
		echo "<th>".$this->description."</th> ";
		echo "<th>".$this->quantity."</th> ";
		echo "<th>".$this->price."</th> ";
		echo "<br>";
   	}
	
	public function ShowInCart()
   	{
   		echo "<th>".$this->id."</th>  ";
		echo "<th>".$this->name."</th>  ";
		echo "<th>".$this->purchasedAmount."</th>  ";
		echo "<th>R".$this->price*$this->purchasedAmount."</th>  ";
		echo "<br>";
   	}
	
	public function GetTotalCost()
	{	
		return $this->price*$this->purchasedAmount;
	}
	
	

} 
	
?>