<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
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
<h1>Array functions</h1>

<table id='customers'>
  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>Address</th>
    <th>Email</th>
  </tr>
</table>

<?php

$users = [
    "Ashik",
    "Rony",
    "Al-amin",
    "Shohag",
    "Ridoy",
    "Tasniya"
];
// how to add a element in array
// যখন array_push করা হবে তখন শেষের দিক থেকে Arrey push হবে।
array_push($users,"Soniya");

// Remove a element from array it's always remove elements from last side;
array_pop($users);
// লাস্ট থেকে যে কয়টা এলিমেন্ট remove করতে চান তার সংখ্যা টা দিয়ে দিতে হবে variable 
// এর পরে ।
array_splice($users, -3);



print_r($users);

?>

</body>
</html>