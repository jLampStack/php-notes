<?php
require_once 'config/config.php';
require_once 'config/db.php';

// Check for submit
if(isset($_POST['delete'])) {
  // Get form data
  $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

  // IMPORTANT: Don't forget quotes around each value. They are required!
$query = "DELETE FROM posts WHERE id = {$delete_id}";

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
// var_dump($post);  // Uncomment for testing

// Free Result (From Memory)
mysqli_free_result($result);

// Close Connection;
mysqli_close($conn);

?>

<?php include_once 'inc/header.php'; ?>

  <h1>Posts</h1><BR>

    <!-- href links to project root dir setup in config file, require_once at top -->
    <small><a href="<?=ROOT_URL?>">Back</a></small><BR><BR>
    <div class="card mb-3">
      <h3 class="card-header"><?php echo $post['title'];?> </h3>
      <div class="card-body">
        <p><?php echo $post['body']; ?></p>
        <small class="blockquote-footer"><?php echo $post['author'] . ' [ created: ' . $post['created_at'] . ' ]'; ?></small>
        <HR>
        <!-- Example: root/editpost.php?id=5 -->
        <a href="<?=ROOT_URL;?>editpost.php?id=<?=$post['id'];?>" class="btn btn-primary">Edit</a>
        <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
          <!-- Hidden so we can grab $id -->
          <input type="hidden" name="delete_id" value="<?=$post['id']?>">
          <input type="submit" name="delete" value="Delete" class="btn btn-warning">
        </form>
      </div>
    </div>