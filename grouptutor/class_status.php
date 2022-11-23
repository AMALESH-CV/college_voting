<?php
include("../connection.php");
$tutorid=$_POST['tutorid'];
$classid=$_POST['classid'];
$status=$_POST['status'];
echo $tutorid;
echo $classid;
echo $status;
if($status=='active')
{
$sq1=mysqli_query($con,"select * from tutors where id='$tutorid' and status=0");
if(mysqli_num_rows($sq1)>0)
{
mysqli_query($con,"update classes set status='active' where id='$classid'");
mysqli_query($con,"update tutors set status=1 where id='$tutorid'");
header('location:select.php');
}
else
{
echo "<script>alert('class is active');
window.location='select.php'
</script>";
}
}

if($status=='inactive')
{
mysqli_query($con,"update classes set status='inactive' where id='$classid'");
mysqli_query($con,"update tutors set status=0 where id='$tutorid'");
header('location:select.php');
}
?>