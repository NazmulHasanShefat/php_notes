<?php
$students = ["Ahsan","Rony","Al-amin","Shohag","Din-islam","Natash","bruse","Wanda","thor"];

foreach($students as $x){
    echo "<h1 style='color:#fff; background-color:blue;'>".$x . "<br>" . "</h1>";
    if($students=="Al-amin"){
        break;
    }
    if($students=="Natash"){
        continue;
    }
}

$users = ["Anil","Tony","captain-marvel","Amarica","Jarves","priya"];

foreach($users as $u){
    echo "<h1 style='color:blue; text-align:center; background-color:pink;'>".$u."<br>"."</h1>";
}

// use foreach loop deffrant wey
 foreach($users as $j):
  echo "<h1>".$j."<br>"."</h1>";
 endforeach
?>