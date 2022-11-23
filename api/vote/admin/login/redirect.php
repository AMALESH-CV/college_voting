<?php
session_start();
include('../db/connectionI.php');
//$db_name="music"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)


	
if(isset($_POST['login']))
{


$sql="SELECT * FROM $tbl_name WHERE mail_id='$myusername' and password='$mypassword'";
//echo $sql;
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
echo $count;
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
//	echo "teacher $myusername $mypassword";
// Register $myusername, $mypassword and redirect to file "login_success.php"

 $result = mysqli_query($con,"SELECT * FROM $tbl_name WHERE mail_id='$myusername' and password='$mypassword'") or die('Could not connect: ' . mysqli_error($con));

while($row = mysqli_fetch_array($result))
  {
$_SESSION['login_user']=$myusername;


//mysql_query("insert into log_in (user_name,date1,ip) values ('$myusername','$d','$ip')") or die ("Error ".mysql_error());
	
	header("location:../dashboard/dashboard.php");
  }
}


else
{

//header("location:login.php?a=1");

}





}

?>
 
 



