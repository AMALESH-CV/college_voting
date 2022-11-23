<?php
include("../connection.php");
$perc=$_POST['attendence'];
$cand=$_POST['email'];
$eid=$_POST['eid'];

$sql2=mysqli_query($con,"update candidate set percentage='$perc' where eid='$eid' and email='$cand'");
header('location:attendence_percentage.php')


?>