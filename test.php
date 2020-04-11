<?php

class Human {
  // Properties
  private $_name;

  public static $_drink = 21;
  
  // Constructor
  public function __construct($name)
  {
    $this->_name = $name;
    echo __CLASS__ . ' __CLASS__ created <BR>';
  }

  // Methods
  public static function getDrinkingAge() {
    return $this->$_drink;
  }

}

$jason = new Human('Jason');
echo '<HR>';

echo Human::$getDrinkingAge();