<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    </style>
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php

?>
<?php
 if($_REQUEST){
  session_start();
  $_SESSION["username"] = $_POST["name"];
  $_SESSION["country"] = $_POST["country"];
  $_SESSION["subject"] = $_POST["subject"];
 }

// session_start();
if(isset($_SESSION["username"])){
  $path = $_FILES["file_img"]["name"];
      $temp_name = $_FILES["file_img"]["tmp_name"];
      $folder = "./images/".$path;
      if(move_uploaded_file($temp_name,$folder)){
        echo "session started";
      }
      else{
        echo "faild to upload";
      }
    echo '<h2 style="text-align:center" class="top-titel">User Profile Card</h2>';
    echo '<div class="card">';
    echo "<img src='$folder' style='width:100%'>";
    echo '<h1>';
    echo $_SESSION["username"];
    echo "</h1>";
    echo " <p class='title'>";
    echo $_SESSION["country"];
    echo "</p>";
    echo ' <p>';
    echo $_SESSION["subject"];
    echo '
     <div style="margin: 24px 0;">
                    <a href="#"><i class="fa fa-dribbble"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                    </div>
    ';
    echo '<a href ="./session_end.php"><button>logout</button></a>';
    echo '</div>';
}
else{
    echo '<div class="card mt-5" style="width: 18rem;">
    <img src="worning.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">you are log out plase login</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>
    <a href= "" class="btn btn-primary">contuct us</a>
    <a href="./login.php" class="btn btn-primary">login</a>
  </div>
</div>';
}
?>