<?php
$user = [
    [1,"Nazmul Hasan","email@gmail.com","Laxmipur","Wahidur Rahman","Nazma"],
    [2,"Ahsan Habib","ahsanhabib@gmail.com","Laxmipur","Habibur","Rokaya"],
    [3,"Al-amil","alamin@gamil.com","kalitola","chanmiya","Rahima"]
];

// echo "<pre>";
// print_r($user);
// echo "<pre>";

// print_r($user[$i]);
// echo "<br>";
for($i=0; $i<count($user); $i++){
    // print_r($user[$i]);
   for($j=0; $j<count($user[$i]); $j++){
    echo $user[$i][$j]."<br>";
   }
}

?>