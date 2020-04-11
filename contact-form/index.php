<?php 
  // Message Vars
  $msg = '';
  $msgClass = 'alert ';

  // Check For Submit
  if( filter_has_var(INPUT_POST, 'submit') ) {
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // Validate, Check Required Fields
    if( !empty($name) && !empty($email) && !empty($message) ) {
      // Passed
      // Check Email
      if( filter_var( $email, FILTER_VALIDATE_EMAIL) === false ) {
        // Failed
        $msg = 'Please use a valid email';
        $msgClass .= 'alert-danger';
      } else {
        // Passed
        $toEmail = 'jlampstack@gmail.com';
        $subject = 'Contact Request From ' . $name;
        $body = '
            <h2>Contact Request</h2>
            <h4>Name</h4><p>' . $name . '</p>
            <h4>Email</h4><p>' . $email . '</p>
            <h4>Message</h4><p>' . $message . '</p>
        ';

        // Email Headers
        $headers =  "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " . $name . "<".$email.">" . "\r\n";

        if( mail($toEmail, $subject, $body, $headers) ) {
          // Email Sent
          $msg = 'Your email has been sent';
          $msgClass .= 'alert-success';
        } else {
          // Failed
          $msg = 'Your email was not sent';
          $msgClass .= 'alert-danger';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass .= 'alert-danger';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-uhut8PejFZO8994oEgm/ZfAv0mW1/b83nczZzSwElbeILxwkN491YQXsCFTE6+nx" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php" class="navbar-brand"><STRONG>LAMPSTACK</STRONG></a>
      </div>
    </div>
  </nav>
  <div class="container"><BR>

    <?php if( $msg != '' ): ?>  
    <div class='<?= $msgClass ?>' > <?= $msg ?> </div>
    <?php  endif; ?>


    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="" class="form-control" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="" class="form-control" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" placeholder="" class="form-control" rows="6" value="<?= isset($_POST['message']) ? $_POST['message'] : '' ?>"></textarea>
      </div>
      <button name="submit" type="submit" class="btn btn-primary btn-md">Submit</button>
    </form>
  </div>
</body>
</html>