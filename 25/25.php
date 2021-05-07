<?php
class Product
{
  private $name;
  private $price;
  private $quantity;
  
  public function __construct($name, $price, $quantity) {
	  $this->name = $name;
	  $this->price = $price;
	  $this->quantity = $quantity;
  }
  
  public function getCost() {
	  return $this->price * $this->quantity;
  }
  
  public function getName() {
	  return $this->name;
  }
  
  public function getQuantity() {
	  return $this->quantity;
  }
} 
 class Cart 
 {
	private $products = []; 
 
    public function add($product) {
		$this->products[] = $product;
	} 
	
	public function remove($name) {
		for ($i = 0;$i < count($this->products); $i++) {
			   $product = $this->products[$i];
		   if ($product->getName() == $name)
		       array_splice($this->products, $i, 1);
		}
	}
	
	public function getTotalCost() {
		$sum = 0;
		foreach ($this->products as $product)
		    $sum += $product->getCost();
			
			return $sum;
	}
	
	public function getProducts() {
		return $this->products;
	}
	
	public function getTotalQuantity() {
		$quan = 0;
		foreach ($this->products as $product)
		    $quan += $product->getQuantity();
			
			return $quan;
	}
	
	public function getAvgPrice() {
		return $this->getTotalCost() / $this->getTotalQuantity();
	}
 }
 
 $cart = new Cart;
 $cart->add(new Product('Tide', 240, 54));
 $cart->add(new Product('Ariel', 340, 154));
 $cart->add(new Product('Losk', 180, 84));
 $cart->add(new Product('Миф', 250, 100));
 echo $cart->getTotalCost();
 echo '<br>';
 echo $cart->getTotalQuantity();
 echo '<br>';
 echo $cart->getAvgPrice();
 echo '<br>';
 $cart->remove('Миф');
 echo $cart->getTotalCost();
 echo '<br>';
 echo $cart->getTotalQuantity();
 echo '<br>';
 echo $cart->getAvgPrice();
 echo '<br>';
 foreach ($cart->getProducts() as $item)
       echo $item->getName() . '<br>';
?>