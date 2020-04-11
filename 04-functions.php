<?php

  # FUNCTIONS - Block of code that can be repeatedly called

  /**
   * Camel Case - myFunction()
   * Lower Case - my_function()
   * Pascal Case - MyFunction()
   */
  
  // Create simpleFunction
  function simpleFunction() {
    echo 'Hello World!<HR>';
  }

  // Run aka Call simple funciton
  simpleFunction();


  function greet($person1, $person2) {
    echo 'Hello ' . $person1 . ' and ' . $person2 . '!<HR>';
  }
  
  greet('Jason', 'Rebeca');

  // Assigning default value to a parameter
  function greet2($name='Jay LampStack') {
    echo 'Hola ' . $name . '<HR>';
  }

  greet2();


  // Passing Arg by Reference changes the value of the variable when it's passed in. Normally the value is never changed.
  
  $num1 = 10;

  function addFive($one){
    echo $one += 5;
    echo '<BR>';
  }

  addFive($num1);
  echo 'The value of $num1 is hasn\'t changed and is still ' . $num1 . '<HR>';

  # Place & ampersand in front of param to pass by reference

  function addFive2(&$one){
    echo $one += 5;
    echo '<BR>';
  }

  addFive2($num1);
  echo 'The value of $num1 is hasn CHANGED and is NOW ' . $num1 . '<HR>';

?>