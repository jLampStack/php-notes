<?php include_once 'server-info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>System Info</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    

    <!-- Render Server Info -->
    <BR>
    <h1>Server Info</h1>
    <?php if( $server ): ?>
      <ul class="list-group">
      <?php foreach( $server as $key => $value ): ?>
        <li class="list-group-item"> <?php echo "<strong>$key:</strong> $value"; ?> </li>
      <?php endforeach; ?>
      </ul>
      <BR>
    <?php endif; ?>

    <!-- Render Client Info -->
    <h1>Client Info</h1>
    <?php if( $client ): ?>
      <ul class="list-group">
      <?php foreach( $client as $key => $value ): ?>
        <li class="list-group-item"> <?php echo "<strong>$key:</strong> $value"; ?> </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    
  </div>
</body>
</html>