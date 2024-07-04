<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set php cookie</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user"><br><br>
        <button name="button" value="set">set cookie</button><br><br>
        <button name="button" value="display">Display cookie</button><br><br>
        <button name="button" value="delete">delete cookie</button><br>
    </form>
</body>
</html>
<?php

// if(isset($_REQUEST["button"])){
//     if($_REQUEST["button"]=="set"){
//         $userVal = $_REQUEST["user"];
//         setcookie("name",$userVal);
//         echo "cookie is set";
//     }
//     if($_REQUEST["button"]=="display"){
//         if(isset($_COOKIE["name"])){
//             echo $_COOKIE["name"];
//          }
//     }
//     if($_REQUEST["button"]=="delete"){
//         if(isset($_COOKIE["name"])){
//             setcookie("name",null,-1);
//         }
//     }

// }


// syntax of php cookie's
 // setcookie(name, value, expire, path, domain, security);
 


if(isset($_REQUEST["button"])){
   if($_REQUEST["button"]=="set"){
      $userType = $_REQUEST["user"];
      setcookie("Name",$userType);  // cookie সেট করা হলো প্রথম টা নাম তারপরের টা value 
      echo "cookie is set";
   }
   if($_REQUEST["button"]=="display"){   // display button থেকে button এর value এর মাধ্যমে requst নেওয়া হলো । 
    if(isset($_COOKIE["Name"])){   // "Name"নামে কোন cookie আছে কি না চেক করা হলো। 
        echo $_COOKIE["Name"];  // cookie display করা হলো । echo এর মাধ্যমে। 
    }
   }
   if($_REQUEST["button"]=="delete"){  //button থেকে requst নেওয়া হল
    if(isset($_COOKIE["Name"])){   // "Name"নামে কোন cookie আছে কি না চেক করা হলো। 
        setcookie("Name",null,-1);
    }
   }
}

?>