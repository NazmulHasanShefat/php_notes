<?php
// php array এর ভিতরে যে কোন টাইপে data থাকতে পারে 
// যেমন string,number/intiger/float,boolean etc.
// php array is 3 types
/* 
1.indexed arrays
2.Associative arrays
3.Multidimensional arrays
*/

$userName = ["Ahsan","Rony","Alamin","Ashik","Rakib"];

// echo $userName[3];
echo "<br>";
/* 
যদি কেউ জানতে চায় কোন array এর ভিতরে কতটি array বা কত user রয়েছে তাহলে 
php তে একটা ফাংশন রয়েছে তা হলো count($arrayName)
*/
// echo count($userName);
// output is 5
for($i=0; $i<count($userName); $i++){
    echo "
         <table id='customers' style='border-collapse: collapse; width: 100%;'>
        <tr>
          <td style='border:1px solid black; padding: 8px;'>$userName[$i]</td>
          <td style='border:1px solid black; padding: 8px;'>$userName[$i]</td>
        </tr>
      </table>
    
    ";
}


?>