<?php 

include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];  

/*$email = "alanbaby@gmail.com";
$password = "12345";*/

$sql = "SELECT * FROM student where email = '$email' and password = '$password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$data[] = array('id'=> $row['id']);
	echo json_encode($data);
}
else{
	echo "failed";
}
?>