<?php

// Book
class Product {
  public $title = "Title", 
         $writer = "Writer", 
         $publisher = "Publisher", 
         $price = "Price";  
}

$product1 = new Product();
$product1->title = "Harry Potter & Philosopher's Stone";
$product1->writer = "J.K. Rowling";
$product1->publisher = "Bloomsbury";
$product1->price = "$30";
?>
