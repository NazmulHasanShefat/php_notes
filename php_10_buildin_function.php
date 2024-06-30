<?php
// 1
// একটা স্ট্রিং এর মধ্যে কয়টা ক্যরেক্টার আছে তা জানার জন্য এই ফাংশন
// This function difind How many carecter in this string
// strlen
$str = "This is Nazmul Hasan";
$num = 20.20;
echo strlen($str);

// 2
// check data type 
// var_dump
echo "<br>";
echo var_dump($num);
echo "<br>";
// 3
// check date 
// this print date
echo date("d");
// month
echo "<br>";
echo date("m");
// for word
echo date("M");
echo "<br>";
// year 
echo date("y");
echo "<br>";
// week
echo date("w");
echo "<br>";
// day
echo date("l");
echo "<br>";

// how to find php version installed in yor computer
// echo phpinfo();
// echo "<br>";

// 4 
// How to check your data is string or not Ans true or false
$s = "shifat";
$i =123;
echo is_string($s);
echo "<br>";
echo is_int($i);
// if string it's return 1 or not return nothing

// random number
echo "<br>";
echo rand();



// die এটা যেখানে দেওয়া হবে সেখানে পরে আর কোড এক্সিকিউট হবে না ।
// echo "<br>";
// echo "nazmul";
// die;
// echo "Vesoje";

echo "<br>";
// Sub string 
$b = "code setp by step";
// এখানে যত লিখা হ বে তার পরের word গুলো সেখা যাবে 
echo substr($b,5);

?>