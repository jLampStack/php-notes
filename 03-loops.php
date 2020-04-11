<?php

  /*
    TYPES OF LOOPS
      - For
      - While
      - Do While
      - Foreach - Diff b/c meant to work with arrays
  */

  # For Loop
  # @params - init, condition, inc
  
  for($i = 0; $i <= 10; $i++){
   echo $i . '<BR>'; 
  } 
  
  echo '<HR>';

  # While Loop - Used when you don't know a set condition
  # @params - condition

  $j = 11;
  
  while($j <= 20) {
    echo $j . '<BR>';
    $j++;
  }

  echo '<HR>';

  # Do...While - Rarely used
  # @params - condition

  $k = 21;

  do {
    echo $k . '<BR>';
    $k++;
  } while($k < 31);

  echo '<HR>';
  

  # foreach - meant to work with arrays

  $people = array('Jason' => 'jason@gmail.com', 'Rebeca' => 'rebeca@gmail.com', 'Ana' => 'ana@gmail.com', 'Memo' => 'memo@gmail.com', 'Ariana' => 'ariana@gmail.com', 'Nathan' => 'nathan@gmail.com', 'Alana' => 'alana@gmail.com');

  foreach($people as $person) {
    echo $person . '<BR>';
  }
  echo '<HR>';

  foreach($people as $person => $email) {
    echo '<b>' . $person . ':</b> ' . $email . '<BR>';
  }
  echo '<HR>';

  $friends = array(
    array('fred', 38, 'black', true),     // 0
    array('wilma', 32, 'red', false),     //1
    array('barney', 28, 'blonde', true),  // 2
    array('betty', 19, 'black', false),   // 3
);

// foreach($friends as $friend => $key) {
//   $output = '';
//   foreach($friend as $key => $value) {
//     $output .= $value[0] . ' is ' . $value[1] . ' years old and has ' . $value[2] . ' hair.<BR>' ;
//   }
//   echo $output;
// }


foreach($friends as $friend => $key) {
    echo $key[0] . ' is ' . $key[1] . ' years old ' . ' and has ' . $key[2] . ' hair <BR>';
  }


echo '<HR>';
$rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];

$count = 0;
while($count < count($rainbow)) {
  echo $rainbow [$count]. '<HR>';
  $count++;
}

echo '<HR>';

$students = ['fred', 'wilma', 'barney', 'betty'];

foreach($students as $key => $value) {
	echo $key . ' ' . $value . '<BR>';
}