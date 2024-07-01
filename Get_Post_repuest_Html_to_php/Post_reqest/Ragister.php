<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 400px;
        margin: 50px auto;
        text-align: center;
        font-family: arial;
        padding:20px 67px;
        }

        .title {
        color: grey;
        font-size: 18px;
        padding: 0;
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
        p{
            font-weight:500;
        }
</style>
</head>
<body>


<div class="card">
<h2 style="text-align:center">Wellcome</h2>
  <img src="./Avater-acount.svg" alt="John" style="width:100%">
  <h1><?php echo $_POST["name"]; ?></h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <p><button>Dash bord</button></p>
</div>
</body>
</html>

<?php
if($_POST){

    echo '<div class="card">';
    echo '<h2 style="text-align:center">Wellcome</h2>';
    echo '<img src="./Avater-acount.svg" alt="John" style="width:100%">';
    
    echo '<h2>';
    echo $_POST["name"];
    echo '</h2>';
    
    echo '<h4>';
    echo $_POST["email"];
    echo '</h4>';
    
    echo '<h4>';
    echo $_POST["country"];
    echo '</h4>';
    
    echo '<p>';
    echo $_POST["Univercity"];
    echo '</p>';
    
    echo '<p><button>Go Dashbord</button></p>';
}
?>