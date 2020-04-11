<?php
require_once 'config/config.php';
require_once 'config/db.php';

// Check for submit
if(isset($_POST['submit'])) {
  // Get form data
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);

  $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

  // If query is successful redirect
  if(mysqli_query($conn, $query)) {
    header('location: '.ROOT_URL.'');
  } else {
    echo 'ERROR: ' . mysqli_error($conn);
  }
}

?>

<?php include_once 'inc/header.php'; ?>

  <div class="container">

    <h1>Add Post</h1><BR>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group row">
        <label for="title" col-form-label>Title</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group row">
        <label for="author">Author</label>
        <input type="text" name="author" class="form-control">
      </div>
      <div class="form-group row">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </div>
    </form>

  </div>

<?php include_once 'inc/footer.php'; ?>