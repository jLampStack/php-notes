<?php
require_once 'config/config.php';
require_once 'config/db.php';

// Create Query
$query = 'SELECT * FROM posts';

// Get Results
$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($post);  // Uncomment for testing

// Free Result (From Memory)
mysqli_free_result($result);

// Close Connection;
mysqli_close($conn);

?>

<?php include_once 'inc/header.php'; ?>

  <h1>Posts</h1><BR>

  <?php foreach($posts as $post): ?>
    <div class="card mb-3">
      <h3 class="card-header"><?php echo $post['title'];?> </h3>
      <div class="card-body">
        <p><?php echo $post['body']; ?></p>
        <small class="blockquote-footer"><?php echo $post['author'] . ' [ created: ' . $post['created_at'] . ' ]'; ?></small>
        <BR>
        <a class="btn btn-primary" href="post.php?id=<?=$post['id'];?>">Read More</a>
      </div>
    </div>
  <?php endforeach; ?>

<?php include_once 'inc/footer.php'; ?>