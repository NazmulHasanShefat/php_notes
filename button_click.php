<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button clisk</title>
</head>
<body>
    <form action="" method="post">
    <button type="submit" name="button" value="btn1">click me</button>
    </form>
</body>
</html>

<?php
if(isset($_POST["button"])){
    clickbtn();
}

function clickbtn(){
    echo "button is clicked";
}
?>