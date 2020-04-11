<?php

require_once 'config/config.php';
require_once 'config/db.php';

// Check for submit
if(isset($_POST['submit'])) {
  // Get form data
  $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  

  // IMPORTANT: Don't forget quotes around each value. They are required!
  $query = "UPDATE posts 
            SET title = '$title', 
                author = '$author', 
                body = '$body'
            WHERE id = {$update_id}";


  // If query is successful redirect
  if(mysqli_query($conn, $query)) {
    header('location: '.ROOT_URL.'');
  } else {
    echo 'ERROR: ' . mysqli_error($conn);
  }
}

// get ID variable and escape dangerous chars
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create Query
$query = "SELECT * FROM posts WHERE id=$id";  // can use concatenation for $id or "double quotes" to parse

// Get Results
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

// Free Result (From Memory)
mysqli_free_result($result);

// Close Connection;
mysqli_close($conn);

?>

<?php include_once 'inc/header.php'; ?>

  <div class="container">

    <h1>Add Post</h1><BR>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group row">
        <label for="title" col-form-label>Title</label>
        <input type="text" name="title" value="<?=$post['title'];?>" class="form-control">
      </div>
      <div class="form-group row">
        <label for="author">Author</label>
        <input type="text" name="author" value="<?=$post['author'];?>" class="form-control">
      </div>
      <div class="form-group row">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?=$post['body'];?></textarea>
      </div>
      <div class="form-group row">
        <label><?=$post['created_at']?></label>
      </div>
      <div>
        <!-- Hidden input only used so we can grab $id -->
        <input type="hidden" name="update_id" value="<?=$post['id']?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        <!-- Form for the delete action -->
      </div>
    </form>

  </div>

<?php include_once 'inc/footer.php'; ?>