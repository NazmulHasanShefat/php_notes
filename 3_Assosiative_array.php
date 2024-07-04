<?php
// Assosiative array
$employ = [
    "Name"=>"Ahsan",
    "Home"=>"Laxmiput",
    "Father"=>"Habibur Rahman",
    "Mother"=>"Aisa begom",
    "work"=>"Student",
    "age"=>"20"
];
// foreach($employ as $kye => $data){
//     echo $kye.": ".$data."<br>";
// }

foreach($employ as $kye => $data):
  echo $kye.": ".$data."<br>";
endforeach;

echo "<br>";
echo "<br>";
echo "<br>";

echo "Name: ".$employ["Name"];
echo "<br>";
echo "Age: ".$employ["age"];
echo "<br>";
echo "Father Name: ".$employ["Father"];
echo "<br>";
echo "Mother Name: ".$employ["Mother"];
?>