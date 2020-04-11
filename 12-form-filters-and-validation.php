<?php

  # filter_has_var() checks for POST or GET values instead of using if isset()
  # Check for posted data
  # https://www.php.net/manual/en/function.filter-has-var.php
  # filter_has_var ( int $type , string $variable_name ) : bool

  // if(filter_has_var(INPUT_POST, 'data')) {
  //   echo 'Data Found';
  // } else {
  //   echo 'No Data';
  // }

  # VALIDATE & SANITIZE
  if(filter_has_var(INPUT_POST, 'data')) {
    // Take value from post data and put it into $email var
    $email = $_POST['data'];
    // Sanitize by Removing aka Stripping illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email . '<BR>';

    if(filter_input(INPUT_POST,'data', FILTER_VALIDATE_EMAIL)) {
      echo 'Email is valid';
    } else {
      echo 'Invalid email';
    }
  }
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>
