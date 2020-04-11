<?php 

  session_start();
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  echo '<B>Welcome ' . $name . '!<B><BR><BR>';

  if( isset($_POST['submit']) ) {
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    header('location: page2.php');
    echo '<BR><BR>';
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 1</title>
</head>
<body>
  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div>
      <label for="name"></label>
      <input type="text" name="name" placeholder="Name">
    </div>
    <div>
      <label for="email"></label>
      <input type="text" name="email" placeholder="Email">
    </div><BR>
    <input type="submit" name="submit" value="Submit">
  </form>

  <BR>
  <a href="page1.php">Page 1</a> | <a href="page2.php">Page 2</a> | <a href="page3.php">Page 3</a>
</body>
</html>