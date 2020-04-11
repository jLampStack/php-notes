<?php 

  $colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];

  echo "<ul id='listBackground' style='list-style-type:none'>";
  foreach ($colors as $color) {
    echo "<li style='color:${color}'>${color}</li>";
  }
  echo "<ul>";

?>