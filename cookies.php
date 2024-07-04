<?php
$name = "Apple";
setcookie("Name",$name,time()+(86400));

if(isset($_COOKIE["Name"])){
    print_r($_COOKIE);
}
else{
    echo "not found cookies";
}
?>