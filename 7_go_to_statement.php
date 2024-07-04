<?php
// goto starment syntex 
/*
goto statment ডিক্লেয়ার করার পরে মঝখানে যত কোড ই থকুক না কেন সে তা স্কিপ করে যাবে 
যতক্ষন না সে স্টেটমেন্ট  এর নাম খুজে পাবে যখন সে ঐ নাম কে খুজে পাবে তখন সে 
সেই নামের ফাংসন টি কে চালনা করবে।
*/

$x = 10;
echo "before condition";
echo "<br>";
if($x==10){   //এই goto স্টটমেন্ট কাজ করবে যদি এই কন্ডিশন true হয়. false হলে কাজ করবে না।
    goto myfunction;
}
// goto এর পরে মঝখানে যত কোড থাকবে সেগুলো এক্সিকিউট ই হবে না । 
$a = "ahsan";
echo $a;
// এই নামের পরে যেসব কোড থাকবে সেগুলো কাজ করবে সুধু। 
myfunction:
echo "this function is work";

echo "<br>";

// while loop with go statment

$b = 0;
while($b <= 10){
    echo $b . "this is work";
    echo "<br>";
    $b++;
    if($b==5){
        goto jump;
    }
}
$Ahsan = "somy";
echo $Ahsan;

jump:
echo "jump will work";

// do while loop 
echo "<br>";
echo "<br>";
echo "<br>";

$c = 1;

do{
    echo $c . "This will be work";
    echo "<br>";
    $c++;
    if($c==5){
        goto next;
    }
}while($c<=10);

$sony = "Ahsan";
echo $sony;

next:
echo "This work go to jump";


?>

