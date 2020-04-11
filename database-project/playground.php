<?php

require_once 'inc/header.php';

// Define Constants
define('ROOT_URL', 'http://localhost:8080/php/php-refresher/database-project/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'phpblog');

// Create Connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


// Check Connection
// if(mysqli_connect_errno()) {
//   // Fail
//   echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
// } else {
//   echo 'Connected to DB';
// }


$query = "SELECT * FROM posts";

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  
foreach($posts as $post) {
  echo $post['title'] . '<BR>';
  echo $post['author'] . '<BR>';
  echo $post['body'] . '<BR>';
  echo $post['created_at'] . '<HR>';
}


require_once 'inc/footer.php';