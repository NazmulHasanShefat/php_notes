
<?php
$user_need = 40;
for($i = 0; $i<=5; $i++){
    echo $i." this is result <br>";
    // if($i >= 5 && $i <10){
    //     break;
    // }
    // if($i < $user_need){
    //     continue;
    // }
}
echo "<br>";

// nested for loop 
// ঊপরের লুপ চলবে ১ বার ভিতরের লুপ চলবে ৩ বার 
// মানে উপরের টা প্রথমবার চললে হবে 
// 1
// 1
// 1
/*
   2
   2
   2

   3
   3
   3
*/

// এই ভাবে উপরের টা ৩ বার চলবে 
// তার পর নিচের টা
// 1
// 2
// 3

// 1
// 2
// 3

// 1
// 2
// 3

// সর্বমোট ৯ বার এই লুপ চলবে;
// রেজাল্ট হবে

/* 

*/

for($a = 1; $a<=3; $a++){
    // echo $a;
    // echo "<br>";
    for($b = 1; $b<=3; $b++){
        echo $b . $a;
        echo "<br>";
    }
}

// while loop 
// sintax of while loop 

$num = 0;
while($num<=10){
    echo $num . "this is while loop";
    echo "<br>";
    $num++;
}
echo "<br>";
echo "<br>";
echo "<br>";
// do while loop 
$num2 = 0;
// syntex 
// do{
//     echo $num2 . "this is do while loop";
//     echo "<br>";
//     $num2++;
// }while($num2==0); এটা 0 হওয়া সর্তের লুপ চালনা করবে। 
// syntex 
do{
    echo $num2 . "this is do while loop";
    echo "<br>";
    $num2++;
}while($num2 <= 10);
