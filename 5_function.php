<?php
// php function
function sum($a,$b){
    return $a + $b;
}

echo sum(20,20);

function userName($color = "pink", $bg = "pink"){
    return "<h1 style='color:$color; background-color:$bg;'>Nazmul Hasan</h1>";
}

echo "Welcome to: ". userName("white","green") . " you are successfully loged in";

echo "<br>";
echo "<br>";
echo "<br>";



// Nested function
/* 
এই function এ প্রথমে উপরের ফাংশন কল করাতে হবে যদি প্রথম ফাংশন কল না করে
২য় ফাংশন মানে  ভিতরের ফাংশন কল করানো হয় তাহলে এটা কাজ করবে না এটা error দিবে 
Nested function কল করানোর সময় সবসময় আগে উপরে যে ফাংশন আছে তকে কল করাতে
হবে তারপর ভিতরের টা কল করাতে হবে। 

আবার দুটোকে উলটা পালটা করলে ও error দিবে প্রথমে উপরের তারপর ভিতরের
*/
function test(){
    echo "This is nested function";
    echo "<br>";
    function test2(){
        echo "This is nested 2";
        echo "<br>";
    }
    test2();  // এটাও করা যায় 
}
test();
test2();

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Variabel function</h1>";
echo "<br>";

// variable function
function varifunction(){
    echo "variabel function is colled";
}
$variableF = "varifunction";

function testV2($a){
    $a();
}
testV2($variableF);
?>