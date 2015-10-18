<?php
	
	include_once("include/product.php");

	class ShoppingCart 
	{ 
	
		public $products = array();
		public $tempProduct;
		public $totalPrice;
		
		public function ShoppingCart()
		{		

		}
		
		public function ClearCart()
		{
			unset($products);
			$products = array();
		}
		
		public function SerializeData()
		{
			$str = serialize($products);
			return urlencode($str);
		}
		
		public function UnserializeData($str)
		{
			$products = unserialize(urldecode($str));
			var_dump($products);
		}
		
		public function AddProduct($product)
		{
			array_push($this->products,$product);
		}
		
		public function RemoveProduct($tid)
		{
			for($i = 0;$i < count($this->products);$i++)
			{
				$this->tempProduct = $this->products[$i];
				if($this->tempProduct->GetId() == $tid)
				{
					unset($this->products[$i]);
				}
				$this->totalPrice = 0;
			}
		}
		
		public function ShowProducts()
		{
			foreach ($this->products as $this->tempProduct) 
			{
				$this->tempProduct->ShowInCart();
				$this->totalPrice += $this->tempProduct->GetTotalCost();
			}
			echo "<th>TOTAL: R".$this->totalPrice."</th><br>  ";
		}
	} 
	
?>