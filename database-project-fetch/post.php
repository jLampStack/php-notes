<?php
require_once 'config/config.php';
require_once 'config/db.php';

// get ID variable
// and escape dangerous chars
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
      </div>
    </div>


