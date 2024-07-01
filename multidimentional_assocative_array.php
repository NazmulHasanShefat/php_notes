<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional Assocative Array</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<h1>Multidimentional Assocative Array</h1>

<table id='customers'>
  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>Address</th>
    <th>Email</th>
  </tr>
</table>

   <?php
   
    // multidimentional assocative array
    $users = [
        ["Name"=>"Nazmul Hasan","Age"=>"22","Address"=>"Laxmipur","Email"=>"mdnazmulhasn@gmail.com"],
        ["Name"=>"Ashik","Age"=>"25","Address"=>"Hoybotpur","Email"=>"ashik@gmail.com"],
        ["Name"=>"Tuhin","Age"=>"20","Address"=>"Ahammedpur","Email"=>"tuhin22@gmail.com"],
        ["Name"=>"Kebria","Age"=>"29","Address"=>"Kholabaria","Email"=>"kibria22@gmail.com"]
    ];
     
    echo "<table id='customers'>";
    foreach($users as $user){
        echo "<tr>";
        foreach($user as $items){
            echo "<td>";
            echo $items . "<br>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach($users as $user){
        
        foreach($user as $itemKye => $items){
           echo $itemKye . ":" . $items . "<br>";
         }
         echo "<br>";
         echo "<br>";
      }
   ?>
</body>
</html>