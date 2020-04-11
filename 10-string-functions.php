<?php

  # https://www.php.net/manual/en/ref.strings.php

  # Common string functions

  $string = " Hello World      "; // string with whitespace

  # substr() returns a portion of a string
  $output1 = substr($string, 1, 8);
  echo $output1 . '<HR>';

  #strlen()
  # Returns the lenghts of a string
  echo strlen($string) . '<HR>';

  # strpos()
  # Finds the position of the first occurence ofa sub string
  echo strpos($string, 'o') . '<HR>';

  # strrpos()
  # Finds last occurence  of a substring
  echo strrpos($string, 'o') . '<HR>';

  # trim()
  # Strips whitespace
  echo trim($string) . '<HR>';  // Great for form inputs

  # Change case
  echo strtoupper($string) . '<HR>';
  echo strtolower($string) . '<HR>';
  echo ucwords($string) . '<HR>';

  # str_replace()
  # Replaces all occurences of a search string with a replacement
  # Takes 3 params 1. string we're searching  2. replacement string  3. variable or text  we're searching
  
  echo str_replace('World', 'Jay  Lampstack', $string) . '<HR>';

  # is_string()
  # Checks if string. Boolean value, 1 true 2 false
  echo is_string($string) . '<HR>';

  $values = array(true, false, null, 'abc', 33, '44', 3.14159, '22.4', '', ' ', 0, '0');

  foreach($values as $value) {
    if(is_string($value)) {
      echo "${value} is a string <BR>";
    }
  }
  echo "<HR>";

  # gzcompress()
  # Compress a string
  $veryLongString = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas fugit, quam sint voluptate ratione placeat commodi! Pariatur incidunt commodi nisi porro optio illum veritatis consectetur laborum hic, fugiat harum culpa.Alias nostrum fugiat assumenda dolorum officiis nam, corporis iste! Debitis ipsum, modi nam sint nesciunt quae, quibusdam maxime, quod alias rerum ad cumque qui excepturi ex harum illum sapiente doloribus.";

  $compressed = gzcompress($veryLongString);

  echo $compressed . '<HR>';

  # gzuncompress()
  # uncompresses a string
  echo gzuncompress($compressed) . '<HR>';
  

?>

