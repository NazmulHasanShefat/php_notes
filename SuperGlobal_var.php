<?php
/*
Super global var এমন variable কে বোঝায় যে var গুলোকে আমরা php প্রজেক্ট এর 
যে কোন file বা যে কোন যায়গা থেকে Access নিতে পারি যদি প্রজেক্ট ফাইল গুলো সব link বা include করা থাকে। 

This are super global variable
List of super global variable
1. $GLOBALS [এই const var কে দেখায় না এটি সুধু super global variable/global variable কেই দেখাবে।]
2. $_SERVER [এটি সুধু সারভার এর সকল info দেয়। ]
3. $_REQUEST [html থেকে যে ডেটা গুলো আসে get/post request মাধ্যমে এই সব গুলোই দেখা যায় $_REQUEST এর মাধ্যমে]
4. $_POST
5. $_GET
6. $_FILES [html থেকে যে কোন ফাইল php তে আনার জন্য $_FILES এর ব্যাবহর করা হয়।]
7. $_COOKIE
8. $_SESSION
9. $_ENV
*/

// 1
// echo "<pre>";
// $a = 20;
// print_r($GLOBALS); //$_GLOBALS var প্রজেক্ট এর ভিতরে user difiend যত
// variable আছে এই $_GLOBALS সব variable সে display করে দিবে। 



// echo "<pre>";
echo ($_SERVER['PATH']); //sarver এর ডেটা দেখার জন্য $_SERSER ব্যাবহার করা হয়। 



?>