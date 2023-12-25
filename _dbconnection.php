<?php
   
    
    $db = "university";
    $con = mysqli_connect("localhost", "root", "" , $db);
    if(mysqli_connect_errno()){
        die("error".mysqli_connect_error());
    }
    

?>