<?php

  # Ternary Operator 
  # Shorthand If statements
  # Shorthand loops

  $loggedIn = true;
  $arr = [3, 5, 7, 14, 17, 19];
  
  echo ($loggedIn ? 'You are logged in' : 'You are not logged in') . '<HR>';

  # We can assign variables based on a condition
  # E.g.) Set variable to true only if loggedIn is true

  $isRegistered = ($loggedIn == true ? 'User is registered' : 'User is not registered');

  echo $isRegistered . '<HR>';
  

  # Nesting ternary
  # 1) If $score > 20 AND...
  # a) $age > 10 the score is GOOD
  # b) $age < 10 the score is EXCEPTIONAL
  # 2) If $score < 20 AND ...
  # a) $age > 10 the score is NOT BAD
  # b) $age < 10 the score is Average HORRIBLE

  $age = 19;
  $score = 1;
                                           
  echo 'Your score is: ' . ($score < 20 ? ($age < 10 ? 'NOT BAD': 'HORRIBLE' ) : ($age <  10 ? 'EXCEPTIONAL' : 'GOOD'));
  echo '<BR>SCORE: ' . $score . '<BR>AGE: '; echo $age .  '<BR><HR>';

?>

<div>
  <!-- LONG APPROACH 1 -->
  <?php
    if($loggedIn) {
      echo '<h1>Welcome Guest 1</h1>';
    } else {
      echo '<h1>Please sign in 1</h1>';
    }
  ?>

  <!-- LONG APPROACH 2 -->
  <?php
    if($loggedIn) { ?>
      <h1>Welcome Guest 2</h1>
  <?php } else { ?>
      <h1>Please sign in 2</h1>
  <?php  }
?>
  
  <!-- SHORT APPROACH -->
  <?php if($loggedIn) : ?>
    <h1>Welcome Guest 3</h1>
  <?php else: ?>
    <h1>Please sign in 3</h1>
  <?php endif; ?>

  
  <!-- LOOPING -->
  <?php foreach($arr as $val): ?>
    <h3><?php echo $val; ?></h3>
  <?php endforeach; ?>

  <?php for($i=0; $i<=10; $i++): ?>
    <h2><?php echo $i; ?></h2>
  <?php endfor; ?>

</div>
