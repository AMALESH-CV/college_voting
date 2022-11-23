<?php
include("../connection.php");
$department_name=!empty($_POST['department'])?
$_POST['department']:'';
if(!empty($department_name))
{
	$tutorData="select * from tutors where department='$department_name' and status=0";
	$result=mysqli_query($con,$tutorData);
	if(mysqli_num_rows($result)>0)
    {
    	echo "<option value=''>select tutor</option>";
	while($arr=mysqli_fetch_assoc($result))
	{
		echo "<option value='".$arr['id']."'>".$arr['name']."
		</option><br>";
	}
  }
  else
  {
 echo "<option value=''>no tutors available</option>";
  }
}

?>