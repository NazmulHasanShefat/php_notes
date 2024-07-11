<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <style>
        .m{
            margin:auto;
        }
    </style>
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
session_start();
session_unset();
session_destroy();

echo '<div class="card mt-5 m" style="width: 18rem;">
    <img src="worning.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">you are log out plase login</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>
    <a href="#" class="btn btn-primary">contuct us</a>
    <a href="./login.php" class="btn btn-primary">login</a>
  </div>
</div>';
?>