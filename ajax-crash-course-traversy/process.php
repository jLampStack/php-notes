<?php 

  // Unsafe example, not filtered or sanitized
  if ( isset($_GET['name'])) {
    echo 'Your name is ' . $_GET['name'];
  }
