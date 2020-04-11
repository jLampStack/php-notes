<?php

$filters = array(
  "email" => FILTER_VALIDATE_EMAIL,
  "age" => array(
    "filter" => FILTER_VALIDATE_INT,
    "options" => array(
      "min_range" => 1,
      "max_range" => 100
    )
  )
);


// print_r( filter_input_array(INPUT_POST, $filters) );


$arr = array(
  "name" => "jay lampStack",
  "age" => "33",
  "email" => "jlamps@gmail.com"
);

$filters = array(
  "name" => array(
    "filter" => FILTER_CALLBACK,
    "options" => "ucwords"
  ),
  "age" => array(
    "filter" => FILTER_VALIDATE_INT,
    "options" => array(
      "min_range" => 1,
      "max_range" => 100
    )
  ),
  "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));

?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email">
  </div>
  <div>
    <label for="age">Age</label>
    <input type="text" name="age" placeholder="Age">
  </div>
  <input type="submit" value="Submit">
</form>