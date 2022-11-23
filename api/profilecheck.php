<?php

include("connection.php");

$_REQUEST['uid']=19 ;
if($_REQUEST['uid'] != "")
{

$sid=$_REQUEST['uid'];
$sql=mysqli_query($con,"SELECT email from student where id='$sid'");
$arr=mysqli_fetch_array($sql);
$email=$arr['email'];
//echo $email;

    $query = "SELECT * from student where email='$email' and SELECT password from login where user_name='$email'";
    //$query="SELECT * from login where user_name='$email'";
    echo $query;
    $result = mysqli_query($con,$query);
   


    //$data = array();

    while($row = mysqli_fetch_assoc($result))
    {

        echo $row['password'];
    }

    //echo json_encode($data);

}
else
 echo "";

?>