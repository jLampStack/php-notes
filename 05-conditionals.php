<?php

  # CONDITIONALS - Are COMPARISONS Used to test for a value and compare stuff whether it's less than or equal to etc.

  /*
    COMPARISON OPERATORS
    ==    equal to
    ===   equal to, value and type
    <     less than
    >     greater than
    <=    less and equal to
    >=    greater and equal to 
    !=    not equal to
    !==   not equal to, value and type
   */

   /*
    LOGICAL OPERATORS

    AND  &&
    OR   ||
    XOR  exclusive OR meaning one has to be true but not both
   */


   function compareNums($a, $b) {
    if($a < $b) {
      echo $a . ' is less than ' . $b;
    } elseif($a > $b) {
      echo $a  . ' is greater  than ' . $b;
    } else {
      echo 'Both numbers are equal';
    }
   }

   // compareNums(1, 5);  // 1 is less than 5

   // compareNums(5, 1);  // 5 is greater than 1

   // compareNums(5, 5);  // Both numbers are equal

   $num1 = 4;
   $num2 = 8;
   $num3 = 12;


   if($num1 < $num2 && $num3 > $num1) {
    echo 'TRUE <HR>';
   }


   # SWITCH

   $favColor = 'blue';

   switch($favColor) {
    case 'red':
      echo 'Your favorite color is red';
      break;
    case 'yellow':
      echo 'Your favorite color is yellow';
      break;
    case 'blue':
      echo 'Your favorite color is blue';
      break;
    case 'green':
      echo 'Your favorite color is green';
      break;
    case 'purple':
      echo 'Your favorite color is purple';
      break;
    default:
      echo 'Your favorite color is something else!';
      break;
   }
   echo '<HR>';


   # OPTIONAL ARGS

   function addThis($a, $b, $c=6, $d=NULL) {
    echo $a + $b + $c + $d;
   }

   addThis(2,4);  // 2 + 4 + 6 + NULL = 12
   echo '<HR>';

   //  3 dots is new in php 5.6 and allows you to enter as many args as you want


  function sum($numbers) {
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }
    return $total;
}

echo sum(1, 2, 3, 4, 5, 6, 7, 8); // 36

$manyNums = [1, 2, 4, 8, 16, 32, 64, 128];

echo '<HR>';

echo sum($manyNums);

?>