<?php 

// Check if button is submitted
if( isset( $_POST['submit'])) {
  // Convert illegal chars to HTML entities
  $email = htmlspecialchars( $_POST['email']);

  // Validate input is not empty
  if( !empty( $email)) {
    // Validate email format
    if( filter_var( $email, FILTER_VALIDATE_EMAIL)) {
      // Passed
      echo $email;
    } else {
      // Failed
      echo 'Invalid email';
    }
  }
}

/**
 * 1. isset() Validates form was submitted
 * 2. htmlspecialchars() Sanitizes by converting illegal chars to HTML entities
 * 3. !empty() Validates required fields have data
 * 4. filter_var( $var, FILTER_VALIDATE_TYPE) Validates input is in correct format 
 */

?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <div>
    <label for="email">Email </label>
    <input type="text" name="email" placeholder="email">
    <button type="submit" name="submit" value="submit">Submit</button>
  </div>
</form>

