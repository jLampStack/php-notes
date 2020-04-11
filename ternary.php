<?php

// 1. Age < 20, Score > 50 = AMAZING
// 2. Age < 20, Score < 50 = GOOD
// 3. Age > 20, Score > 50 = EXCELLENT
// 4. Age > 20, Score < 50 = BAD

$age = 20;
$score = 50;
                              // true side
                         // age < 20 both sides
echo ( $age < 20 ? ( $score >= 50 ? 'AMAZING' : 'GOOD' ) 
                 : ( $score >= 50 ? 'EXCELLENT' : 'BAD' ));
                         // age > 20 both sides
                             // false side
?>

