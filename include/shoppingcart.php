<?php
	
	include_once("include/product.php");

	class ShoppingCart 
	{ 
	
		public $products = array();
		public $tempProduct;
		
		public function ShoppingCart()
		{		

		}
		
		public function AddProduct($product)
		{
			array_push($this->products,$product);
		}
		
		public function RemoveProduct($id)
		{
			
		}
		
		public function ShowProducts()
		{
			//for ($x = 0; $x <= count($this->products); $x++)
			//{
			//	echo $this->products[$x]->Show();
			//}
			
			foreach ($this->products as $this->tempProduct) 
			{
				$this->tempProduct->Show();
			}
		}
	} 
	
?>