<?php
require_once 'config.php';

// Create Connection
// args point to vars defined in config.php
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if(mysqli_connect_errno()) {
  // Fail
  echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}