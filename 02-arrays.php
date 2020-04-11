<?php

  /*
    3 TYPES OF ARRAYS
      - Indexed
      - Associative
      - Multi-Dimensional
  */

// echo
// var_dump
// print
// print_r
// print_r - print array in human 'readable' format
// arr() Vs. [ ]
// array_push(array,value1,value2...)
// array_pop(array)
// array_shift(array)
// array_unshift(array,value1,value2,value3...)
// array_splice(array,start,length,array) *** MUTATES
// array_slice(array,start,length,preserve)
// array_keys(array)
// array_values(array)
// count($arr)
// sizeof() - alias of count()
// sort()
// array_map(myfunction,array1,array2,array3...)

// foreach( $array as $key => $value) { code... };



// INDEX ARRAYS 
$arr = array('one', 'two', 'three', 'four', 'five'); // one, two, three, four, five
print_r($arr);
echo '<HR>';
 
// Adding to array
$arr[2] = 'three'; // one, two, XXX, four, five ('replaces three and 2nd index')
print_r($arr);
echo '<HR>';

//         0      1       2        3       4
$nums = ['one', 'two', 'three', 'four', 'five'];

// SLICE NO MUTATE: array_slice(array,start,length,preserve)
print_r(array_slice($nums,1,2)); // two, three
echo '<HR>';
print_r($arr); // one, two, three, four, five *** NOT mutated
echo '<HR>';

// SPLICE MUTATES: array_splice(array,start,length,array)
print_r(array_splice($nums,1,2)); // two, three
echo '<HR>';
print_r($nums); // one, four, five *** IS mutated
echo '<HR>';

// PUSH adds at end, UNSHIFT adds at beginning
$alpha = ['a', 'b', 'c', 'd', 'e'];
print_r(array_push($alpha, 'f')); // 6
echo '<HR>';
print_r($alpha); // a, b ,c , d, e, f
echo '<HR>';
// POP removes from end, SHIFT does front
print_r(array_pop($alpha)); // f
echo '<HR>';
print_r($alpha); // a, b, c, d, e
echo '<HR>';

// ASSOC ARRAYS
$users = array(
  'Brad' => 35,
  'Jay' => 42,
  'Edgar' => 22,
  'Rebeca' => 30
);

echo $users['Jay'] . '<BR>'; // 42
$users['Jay'] = 28; // change age
echo $users['Jay']; // 28
echo '<HR>';

// ADD TO ASSOC ARRAY
$users['Alana'] = 19;
print_r($users); // verifies
echo '<HR>';



// MULTI-DIMENSIONAL ARRAY
$cars = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 22),
  array('Ford', 24, 12),
);

echo $cars[1][2];  // 22
echo '<HR>';



$rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];
echo count($rainbow);

?>