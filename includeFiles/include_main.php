<?php
  for($i=0; $i<=10; $i++){
    // এটা বার বার রিপিট হবে না 
    include_once("./include_child.php");
  }
  

  //   ফাইল যদি পাওয়া না য্যয় তবে এটা worning দিবে 
   echo include("./include_child.php");

//   ফাইল যদি পাওয়া না য্যয় তবে এটা error দিবে 
  echo require("./include_child.php");


?>