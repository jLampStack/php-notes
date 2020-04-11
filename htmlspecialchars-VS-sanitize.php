<?php

$email = 'joe@<strong>example</strong>.org';
$sanitized = filter_var( $email, FILTER_SANITIZE_EMAIL );
$specialchars = htmlspecialchars($email);

//var_dump($sanitized);    // Removes illegal chars
//var_dump($specialchars);  // Converts illegal chars to 


$email2 = "john(.doe)@exa//mple.com";

$email2 = filter_var($email2, FILTER_SANITIZE_EMAIL);

echo $email2;


/*
# Renders As...
joe@strongexamplestrong.org
joe@<strong>example</strong>.org

# Page Source
string(27) "joe@strongexamplestrong.org"  // Removes Illegal Chars
string(44) "joe@&lt;strong&gt;example&lt;/strong&gt;.org" // Converst Illegal Chars to ASCII
*/

?>