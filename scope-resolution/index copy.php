<?php 

class Person {
  // Access Modifiers - private, public, protected
  private $_name;
  // Constructor
  public function __construct($name)
  {
    $this->_name = ucwords($name);
    echo __CLASS__ . ' __CLASS__ created <BR>';
  }

  // Methods
  public function setName($name) {
    $this->_name = $name;
  }
  
  public function getName() {
    return $this->_name;
  }

  public static function greet() {
    return 'Hello world!';
  }
}
echo Person::greet();

$me = new Person('jason');
echo $me->getName();