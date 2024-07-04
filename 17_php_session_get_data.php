<?php
session_start();

// sessions get the data
if(isset($_SESSION["userName"])){
    echo "welcome user name". $_SESSION["userName"]. "<br>";
    echo "welcome user favcolor :".$_SESSION["favcolor"]. "<br>";
    echo "welcome user animal :".$_SESSION["favAnimal"]. "<br>";
}
else{
    echo "Please login to continue";
}
?>