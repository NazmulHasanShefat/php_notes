<?php
// what is sassion ?
// sassion হলো এমন এক পদ্ধতি যা দিয়ে ওয়েব কোন site e বা web Application এর data store এবং manage করা যায় ।

// varify the user login info;
session_start();

$_SESSION["userName"] = "Nazmul Hasan";
$_SESSION["favcolor"] = "red";
$_SESSION["favAnimal"] = "cat";

echo "we have start your sassion";

?>