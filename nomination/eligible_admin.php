<?php
include("../connection.php");
$cand=$_REQUEST['cand'];
$eid=$_REQUEST['eid'];
$classid=$_REQUEST['classid'];

echo $eid;
echo $cand;
echo $classid;
$sql2=mysqli_query($con,"update candidate set status=1 where eid='$eid' and email='$cand'");
header("location:nomination_admin.php?classid=$classid");


?>