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
$people[] = "Jase";
$people[] = "Jay";
$people[] = "Jason";
$people[] = "Jay";
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



// Get Query String
$q = $_REQUEST['q']; // Superglobal, Can also use GET

// Init suggestion var
$suggestion = "";

// Get Suggestion
if($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person) {
    // Find first occurence of $q
    // stristr finds the first occurence of $q within 
    if(stristr($q, substr($person, 0, $len) )) {
      if($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;