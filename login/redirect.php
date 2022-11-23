<?php
session_start();
include('../db/connectionI.php');

$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 

$tbl_name="login";
$sql="SELECT * FROM $tbl_name WHERE user_name='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);
if($count == 1)
{
  while($row = mysqli_fetch_array($result))
  {
   
	 if($row['type']=='admin')
	 {

			$_SESSION['user'] ="admin";
			$_SESSION['email'] =$row['user_name'];
			$_SESSION['admin_id']=$row['id'];
			//$_SESSION['doctor'] =$myusername;
			$_SESSION['login'] ="1"; 
			header("location:../admin_dashboard/dashboard.php");
		}
		elseif($row['type']=='grouptutor')
		{
      $_SESSION['user'] ="grouptutor";
			$_SESSION['email'] =$row['user_name'];
			$_SESSION['admin_id']=$row['id'];
			//$_SESSION['doctor'] =$myusername;
			$_SESSION['login'] ="1"; 
			header("location:../grouptutor_dashboard/dashboard.php");
		}
  }
}

else
{
	header("location:login.php?a=1");
}

//header("location:login.php");

?>
 
 



