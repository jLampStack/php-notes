<?php

class Person {
  // Access Modifiers - private, public, protected
  private $name;
  // Constructor
  public function __construct($name)
  {
    $this->name = $name;
    echo __CLASS__ . ' class created <BR>';
  }

  // Methods
  public function setName($name) {
    $this->name = $name;
  }
  
  public function getName() {
    return $this->name;
  }
}

$person1 = new Person("Jason");
echo $person1->setName('Jay LampStack');
echo $person1->getName();


// INHERITANCE - EXTEND FROM PERSON CLASS

class Customer extends Person {
  // Access Modifiers - private, public, protected
  private $balance;

  // Constructor
  public function __construct($name, $balance)
  {
    // parent:: allows us to reference the Person base class without having to type Person. 
    // This approach that should be used instead of Person__construct()
    // :: is a scope resolute operator that allows us to access properties or method within a class that we've over-written when we extend that particular class
    parent::__construct($name, $balance);
    echo __CLASS__ . ' class created <BR>';
  }

  public function setBalance($balance) {
    $this->balance = $balance;
  }

  public function getBalance() {
    return $this->balance;
  }
}

$customer1 = new Customer('John Doe', 500);
echo $customer1->getName();
echo $customer1->getBalance();

?>