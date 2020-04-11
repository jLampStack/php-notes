<?php 

// Connect to database
$conn = mysqli_connect('localhost', 'root', '12345', 'ajaxtest');

echo 'processing...';

  // Unsafe example

  // Check for POST variable
  if ( isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'Your name is ' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)) {
      echo 'User Added...';
    } else {
      echo 'ERROR: ' . mysqli_error($conn);
    }
  }