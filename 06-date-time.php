<?php

  # https://www.php.net/manual/en/function.date.php

  # date ( string $format [, int $timestamp = time() ] ) : string

  date_default_timezone_set('Europe/Berlin');

  echo date('M-d-Y') . '<HR>';
  echo date('g:i:s A');
  echo '<HR>';

  /**
   * d - Day
   * m - Month
   * Y - Year
   * l - Day of week
   * h - Hour
   * i - Minute
   * s - Seconds
   * a - am or pm
   * A - AM or PM
   * Set Time Zone - deate_default_timezone_set('America/Toronto'); 
   *
   */

   // My birthday timestamp... in order... hours, min, sec, month, day, year
  

   /*
   Unix timestamp is a long integer containing the number of seconds between the Unix Epoc (January 1 1970 00:00:00)  and the time specified
  */

   $timestamp = mktime(9, 10, 54, 03, 14, 1977);


  // Num of seconds that have passed from the Unix Epoch to my birthday

  echo $timestamp; // 227175054
  echo '<HR>';

  echo date('m/d/Y', $timestamp);
  echo '<HR>';

  echo date('m/d/Y H:is a', $timestamp);
  echo '<HR>';
   
  // RECAP: 
  // 1. Make timestampe using mktime()
  // 2. Convert it  to a readable date using date()

  // strtotime() takes a string and turns it into time
  $timestamp2 = strtotime('9:00am March 14 1977');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Sunday');
  $timestamp5 = strtotime('+2 2 Months 2 Days');

  echo $timestamp2;
  echo '<HR>';

  echo date('m/d/Y h:i:s a', $timestamp2);
  echo '<HR>';

  echo date('m/d/Y h:i:s a', $timestamp3);
  echo '<HR>';

  echo date('m/d/Y h:i:s a', $timestamp4);
  echo '<HR>';

  echo date('m/d/Y h:i:s a', $timestamp5);
  echo '<HR>';

?>