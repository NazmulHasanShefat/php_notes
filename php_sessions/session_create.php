<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
 /* for php profile */
 .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }
  .top-titel{
    margin-top:150px;
  }
  .title {
    color: grey;
    font-size: 18px;
  }
  
  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }
  
  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }
  
  button:hover, a:hover {
    opacity: 0.7;
  }
    </style>
</head>
<body>
    
</body>
</html>

<?php
 
   if($_REQUEST){
    session_start();
    $_SESSION["username"] = $_POST["name"];
    $_SESSION["country"] = $_POST["country"];
    $_SESSION["subject"] = $_POST["subject"];
    echo "<script>alert('you acount created successfull')</script>";
    echo '<a href ="session_started.php"> <p><button>Go to your profile</button></p></a>';
   }
?>