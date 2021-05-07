<?php
class Product
{
	private $name;
	private $price;
}

$product1 = new Product;
$product2 = $product1;
var_dump($product1);
var_dump($product2);
?>