<?php

include("connection.php");

    $uid = $_POST['uid'];
    $sname = $_POST['sname'];
    $password = $_POST['password'];


        $sql1 = "UPDATE student SET student_name='$sname', password='$password' WHERE id='$uid'";
        
        if(mysqli_query($con,$sql1))
            echo "Successfully Updated";


?>