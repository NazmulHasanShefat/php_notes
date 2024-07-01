<?php
/*
local variable or global variable 

local variable 
local variable function এর বাহিরে কল করা যায় না । সুধু মাত্র function এর ভিতরে 
কল করা যায় । 

global variable
function বাহিরে যত variable থাকে তাদেরকে global variable বালা হয় । 
global variable function এর ভিতরে এবং বাহিরে যে কোনা যায়গায় কল করা যায়। 
*/

$name = "Tasniya";//----this is global variable
function checkglo(){
    $name = "This is local variable";//----this is local variable
     echo $name;
}
echo $name;
echo "<br>";
echo checkglo();



?>