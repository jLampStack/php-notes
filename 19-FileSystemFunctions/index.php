<?php

  // Filename with file extension
  $path = '/dir0/dir1/myfile.php';
  $file = 'file1.txt';
  $greetFile = 'greet.txt';

  // Return filename
  echo basename($path); // myfile.php

  echo '<HR>';

  // Return filename without ext
  echo basename($path, '.php'); // myfile

  echo '<HR>';

  // Return the dir name from path
  echo dirname($path);  // /dir0/dir1

  echo '<HR>';

  // Check if file exists, can put in an If Statement
  echo file_exists('file1.txt');  // 1 for true or 0 for false

  echo '<HR>';

  // Get absolute path
  echo realpath($file);
  // E.g.) C:\Users\jason\OneDrive\Documents\webdev\php\php-refresher\19-FileSystemFunctions\file1.txt
  // Note: file1.txt must exist in the directory to return the path

  echo '<HR>';

  // Check to see if file
  echo is_file($file);  // 1 for true or 0 for false;
  // Diff between is_file and file_exists() is we can use file_exists to search all the sub-directories as well and it will search from the dir you are currently in

  echo '<HR>';

  // Checks if file is writable
  echo is_writable($file);

  echo '<HR>';

  // Checks if file is readable
  echo is_readable($file);

  echo '<HR>';

  // Checks filesize
  echo filesize($file); // returns number in bytes

  echo '<HR>';

  # FUNCTIONS THAT CAN MANIPULATE TH FILE SYSTEM

  // Create a directory named "Jason"... if dir already exists it will throw an error
  // mkdir('jason');

  echo '<HR>';

  // Delete directory as long as there are no files withing it
  rmdir('jason');

  // Copy a file e.g.) Take file1.txt and copy it
  #  copy('copyfile.ext', 'createfile.txt')
  echo copy('file1.txt', 'file2.txt');

  // Rename a file
  #  rename('filename.ext', 'newname.ext')
  echo rename('file2.txt', 'info.txt');


  // Delete File
  unlink('info.txt');


  echo '<HR>';

  // Write from file to string
  // Can also pass var as arg
  echo file_get_contents('greet.txt');

  
  echo '<HR>';


  // Write string to file
  // Open greet.txt to view changes. It overwrote original 'Hello World!' content
  echo file_put_contents($greetFile, 'Goodbye World!');

  // Note: If the file doesn't exist I believe the system will automatically generate that filename in 1 step
  echo file_put_contents('greet2.txt', 'This text was added to a newly created file in one step!');

  echo '<HR>';

  // Append to file opposed to overwrite everythign
  #  $currnent is for $current contents
  $current = file_get_contents('append.txt');

  $current .= "\r\nThis text gets appended with every page refresh!";  // need double quotes for carriage return to work

  // Then we need to put it back
  echo file_put_contents('append.txt', $current);

  echo '<HR>';

  // Open File For Reading
  // Allows us to put a file into a var called a handle and then run functions on that handle
  #  fopen( 1. file  2. $mode)
  #  Modes: r, r+, w, w+, a, a+, x, x+, c, c+, e 
  #  Modes: https://www.php.net/manual/en/function.fopen.php
  $handle = fopen('lorem.txt', 'r');  
  $data = fread($handle, filesize('lorem.txt'));  // filesize() # E.g.) 1024 bytes
  echo $data;

  echo '<HR>';

  // Open File and Write
  $handleWrite = fopen('handlewrite.txt', 'w');
  $txt = 'This is the text I am inserting when we write to the file using fopen() and fclose()';
  fwrite($handleWrite, $txt);
  fwrite($handleWrite, "\r\nWe can continuously write to the same file");
  fclose($handleWrite); // Important to close file when done.


  // Continuously write to a file using 