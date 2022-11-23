<?php
include("../connection.php");
$cand=$_REQUEST['cand'];
$eid=$_REQUEST['eid'];

echo $eid;
echo $cand;
$sql2=mysqli_query($con,"update candidate set status=1 where eid='$eid' and email='$cand'");
header('location:attendence_percentage.php')


?>