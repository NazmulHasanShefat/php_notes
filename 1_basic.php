<?php 
// variable types 
// const variable 
// this variable can diclare one time or value assign one time you con't reassign this value or rediclareed variable
const Name = "Nazmul Hasan 123";
echo Name;
?>
<div class="container">
    <p>Name <span><?php echo Name; ?></span></p>
</div>
<?php
// difind type variable 
 define("Collage","Laxmipur collage");
 echo Collage;
?>
<br>
<!-- data types -->
 <!-- Array  -->
  <?php 
  $arr = ["banana","apple","mango"];
  echo $arr[0];
 // object calss
  echo "<br>";

// ftp data type 
// $connection = ftp_connect("127.2.0.1") or die("Local Host not found");
// echo var_dump($connection);


//   spaceship oparator (<=>)

// যদি a এর থেকে b ছোট হয় তাহলে সে রিটার্ন করবে (1)
// যদি বড় হয় তাহলে return (-1) 
// আর যদি a এবং b সমান হয় তাহলে সে রিটার্ন করবে (0)
// এটাই হল spaceship oparator 
$a = 10;
$b = 5;
$c = 10;
echo var_dump($a<=>$b);
//   retun 1
?>