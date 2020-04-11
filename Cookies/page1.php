<?php 

  if(isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    setcookie('username', $username, time() + 3600); // 1 Hour
    setcookie('email', $email, time() + 3600); // 1 Hour

    header('Location: page2.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookies</title>
</head>
<body>
  
  <h2>Page 1</h2>

  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div>
      <label for="username"></label>
      <input type="text" name="username" placeholder="Username"><BR><BR>
    </div>
    <div>
    <div>
      <label for="email"></label>
      <input type="email" name="email" placeholder="Email"><BR><BR>
    </div> 
    <input type="submit" name="submit" value="Submit">
  </form>

  <BR><BR>
  <a href="page2.php"> Page 2 </a>

</body>
</html>