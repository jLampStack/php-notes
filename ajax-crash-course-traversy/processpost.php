<?php 

  echo 'running...';

  // Unsafe example, not filtered or sanitized
  if ( isset($_POST['fname'])) {
    echo 'Your name is ' . $_POST['fname'];
  }