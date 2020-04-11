<?php 

  $user = ['name' => 'Jay LampStack', 'username' => 'jlamps@email.com', 'city' => 'Toronto' ];

  $user = serialize($user);

  setcookie( 'user', $user, time() + 180000);  // 3 minutes

  // Stores a long ususual string as a value

  // a%3A3%3A%7Bs%3A4%3A%22name%22%3Bs%3A13%3A%22Jay+LampStack%22%3Bs%3A8%3A%22username%22%3Bs%3A16%3A%22jlamps%40email.com%22%3Bs%3A4%3A%22city%22%3Bs%3A7%3A%22Toronto%22%3B%7D


  // echo $user['name'] . '<BR>';

  // Convert back so we can access $user values

  $user = unserialize($user);

  echo $user['name'];

  

?>