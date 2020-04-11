<?php 

require_once 'classes/Product.php';
require_once 'classes/Book.php';

$book = new Book('I Am The Cheese', 8.99, '123456789');
echo $book->getProductType() . '<BR>';
echo $book->getProductPrice() . '<BR>';
echo $book->getProductIsbn() . '<BR>';

