<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array data</title>

    <style>
        .mytable{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        .mytabel td,.mytable th{
            border:1px solid gray;
        }
        td{
            padding:8px;
        }
        .mytable th{
            background-color: #04AA6D;
            padding:8px;
            color:#fff;
            text-align:left;
        }
        .mytable tr:nth-child(even){
            background-color: #f2f2f2;
        }
        .mytable tr:hover{
            background-color:#ddd;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <table class="mytable">
       <tr>
         <th>S N.</th>
         <th>Names</th>
         <th>Father Names</th>
         <th>Email's</th>
         <th>Address</th>
       </tr>
    </table>


    <?php
     $users = [
        [1,"Nazmul Hasan","Wahidur Rahman","mdnazmulhasan0879@gmail.com","Laxmipur"],
        [2,"Ahsan Habib","Habibur Rahman","ahsanhabib@gamil.com","Laxmipur Hat"],
        [3,"Al-amin","Chan miya","alamin@gmail.com","Toltoliya para"],
        [4,"Al-amin","Chan miya","alamin@gmail.com","Toltoliya para"],
     ];

     echo "<table class='mytable'>";

     for($i=0; $i<count($users); $i++){
        echo "<tr>";
        for($u=0; $u<count($users[$i]); $u++){
            echo "<td>";
            echo $users[$i][$u];
            echo "</td>";
        }
        echo "</tr>";
     }
     echo "</table>";
    ?>
</body>
</html>