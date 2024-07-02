<?php
if($_REQUEST){
    foreach($_REQUEST as $kye =>$data){
        echo $kye .": ". $data . "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    if($_FILES["files"]){
        $path = $_FILES["files"]["name"];
        // echo $path;
        $Upload_path = "./Uploaded_Files/".$path;
        // echo $Upload_path;
        if(move_uploaded_file($_FILES["files"]["tmp_name"], $Upload_path) || die("faild to upload")){
            echo "File is uploded successfully";
        }
        else{
            echo "faild to upload";
        }
    }
    else{
       die("faild to upload");
    }
    
}
?>