<?php
// type casting 
/*
what is type casting
type casting যে কোন value এর টাইপ চেঞ্জ change করাকে type casting বলা হয়।
যেমন number কে string
*/
$a = 1;
// converting string 
$a = (string) $a;
// converting number to boolean
$a = (bool) $a;
// convert array
$a = (array) $a;
// convert object
$a = (object) $a;

$b = 2;
$b = (float) $b;

var_dump($a);

echo "<br>";

var_dump($b);
?>