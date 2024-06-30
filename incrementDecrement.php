
<?php
    echo "<br>";
    /* increment is 2 type 
    1.pre increment
    এটা প্রথমে increment হবে তার পর এক্সিকিউট বা রান হবে 
    যেমন ঃ
    */
    $a = 10;
    echo ++$a;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //  প্রথমেই সে 1 বেড়ে গেছে
    
    /*
    2.post increment
    এটা প্রথমে run হবে তার পর সে increment হবে প্রথমে সে যেমন ছিল তেমন ই থাকবে তারপর
    আবার কল করলে সে increment হবে।  তার আগে হবে না। 
    */
    $b = 10;
    echo $b++;
    echo "<br>";
    echo $b;
    echo "<br>";


    // string concatinator oparator
    $name = "my name is : nazmul Hasan";
    $age =" and my age is : 22";
    // $name.=$age;
    echo $name . $age;

    echo "<br>";
    
    // if else 
    $x = 20;
    $y = 22;
    $z = 30;
    
    if($x==20){
        echo "this age is write";
    }
    else{
        echo "age something wrong";
    };
    echo "<br>";

    if($y >= 18){
        echo "you are adult";
    }
    else{
        echo "you are child";
    }

    echo "<br>";

    // switch condition
    $color = "blue";
    switch($color){
        case "red";
        echo "this is my favorite color";
        break;

        case "blue";
        echo "this color is go butiful";
        break;

        case "yellow";
        echo "this is not fav";
        
        // this same as else
        default;
        echo "this is my default color";
    }

      
?>