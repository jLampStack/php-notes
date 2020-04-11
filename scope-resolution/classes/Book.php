<?php 
  
class Book extends Product {
  protected $isbn;

  public function __construct($type, $price, $isbn)
  {
    parent::__construct($type, $price);
    $this->_isbn = $isbn;
  }

  public function getProductIsbn() {
    return $this->_isbn;
  }
}