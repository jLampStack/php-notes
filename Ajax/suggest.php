<?php
// People Array @TODO - Get from DB
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Ariana";
$people[] = "Rhonda";
$people[] = "Rebeca";
$people[] = "Hal";
$people[] = "Jason";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Alana";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanada";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Ben";
$people[] = "Brad";
$people[] = "Mike";
$people[] = "Nick";
$people[] = "Chet";
$people[] = "Candy";
$people[] = "Joyce";
$people[] = "Mario";
$people[] = "Ana";
$people[] = "Mel";
$people[] = "Alexandra";
$people[] = "Bobby";
$people[] = "Nathan";
$people[] = "Wayne";
$people[] = "Ximena";
$people[] = "Zora";
$people[] = "Charlie";
$people[] = "Dillon";
$people[] = "Eddie";
$people[] = "Frank";
$people[] = "George";
$people[] = "Henry";
$people[] = "Harietta";
$people[] = "Isabella";
$people[] = "Jamie";
$people[] = "Kenny";
$people[] = "Louis";
$people[] = "Oscar";
$people[] = "Peter";
$people[] = "Quinn";
$people[] = "Rachel";
$people[] = "Sienna";
$people[] = "Sierra";
$people[] = "Steve";
$people[] = "Tessa";
$people[] = "Tony";
$people[] = "Uma";
$people[] = "Victoria";
$people[] = "Vicken";
$people[] = "Vanessa";
$people[] = "Wendy";
$people[] = "Yolanda";
$people[] = "Zoey";



$q = $_REQUEST['q'];

// Init suggestion var
$suggestions = "";

if(!empty($q)) {
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($people as $person) {
    if(stristr($q, substr($person, 0, $len))) {
      if($suggestions === "") {
        $suggestions = $person;
      } else {
        $suggestions .= ", $person";
      }
    }
  }
}


echo $suggestions === "" ? "No Suggestions" : $suggestions;