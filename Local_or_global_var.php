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
    $namef = "This is local variable";//----this is local variable
     echo $namef;
     //---function এর ভিতরে global variale diclare করা যায় তা হলো  variable এর প্রথমে global kyeword add করে দেওয়া ।
     echo "<br>";
     global $namef; //--This is converted global variable

     $namef = "changed variable";// this is changed global variable

    //  এই $name variable কে global kyeword এর পরে vaariable এর নাম দেওয়ার পরে এটা global variable হয়ে গেল এবার এই ভারিয়েবল কে যে কোন যায়গা থেকে কল করা যাবে । 
}

echo checkglo();
echo "<br>";
echo $namef;

echo "<br>";

// Nested function 

$n = "Anil";

function test(){
    $n = "bruse banar";
    echo $n;
    function innerfunction(){ // this is nested function
        $n = "nested function";
        echo $n;
    }
}

test();
echo "<br>";
innerfunction();
echo "<br>";
echo $n;

?>