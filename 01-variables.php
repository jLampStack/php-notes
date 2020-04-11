<?php  



// Sometimes it is recommended to leave out the closing php tag

  /*
    FORMATTING
    camelCase
    lower_case or snake_case
    PascalCase - 1st letter is upper
  */

  $variable = 'A variable is a container that stores a value';
  echo $variable . '<HR>';

  $varNaming = 'Prefix with $, start with letter or _underscore, only letters, numbers or underscores, case sensitive';
  $var1 = 'With single quotes we need to concatenate variables together with a period.';
  $var2 = "Double quotes will parse the variable for us and there is no need to concatenate.";
 
  // Data Types: string, int, float, bool, Object, arr, NULL, or a reference
  $string = 'Hello World!';
  $integer = 101;
  $float = 1.316;
  $boolean = true;
  $null = 'null Can be a return or a reference to a function or something like that.';
  $arr1 = ['one', 'two', 'three', 'four', 'five'];
  $arr2 = array('red', 'orange', 'yellow', 'green', 'blue', 'purple');

  // Concatenate
  $greeting = 'Hello World!';

  // Output data
  $echo = "echo displays information, but doesn't return a value";
  $print = "print returns a value and can be used in expressions. Because it returns a value it's a little slower than echo";
  $print_r = "print_r is similar to var_dump. It prints human readable information. R  is probably for readable. It's great for arrays and objects.";
  
  // Constant
  $constant = "Used for values that will never change. Use define('NAME', 'some value', boolean) function to create a constant.  The first arg which is the name of the constant must be uppercase to work. Constants are case sensitive. The third arg which is an optional boolean decides if we can name the constant case insensitive or not.  If the boolean is true it can be case insenstive.";

  // Define Constant - Case Sensitive, must be all uppercase
  // define(name, value, case-insensitive)
  define('GREETING', 'Hello Jay LampStack', true);
  echo $constant . '<HR>';  // E.g.) A servername most likely will never change
  echo GREETING;  




  echo $echo . '<HR>';

  print $print . '<HR>';

  echo $print_r  . '<HR>';

  print_r($arr1); echo '<HR>';

  print_r($arr2); echo '<HR>';



?>

