<?php 

  // Display Cookies
  if( !empty($_COOKIE)) {
    echo '<h2>Cookie Info</h2>';
    foreach( $_COOKIE as $cookie => $value ) {
      echo "<strong>${cookie}</strong>: ${value}<BR><BR>";
    }  
  }

  // Unset All Cookies
  if( isset( $_POST['unset'])) {
    foreach ($_COOKIE as $cookie => $value) {
      setcookie( $cookie, '', time() -3600);
    }  
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 2</title>
</head>
<body>

<h2>Page 2</h2>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div>
      <label for="unset"></label>
      <input type="submit" name="unset" value="Unset All Cookies" />
    </div>
  </form>

  <BR>
  <a href="page1.php"> Page 1 </a>
</body>
</html>