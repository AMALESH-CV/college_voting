  <?php

       include("connection.php");
       error_reporting(0);
       $uid=$_REQUEST['uid'];
       //echo $uid;
    $res9=mysqli_query($con,"select * from student where id='$uid'");
    $arr9=mysqli_fetch_array($res9);
    $tutorid=$arr9['tutor_id'];
//echo $tutorid;
$res10=mysqli_query($con,"SELECT * from classes where email='$tutorid' and status='active'");

$res11=mysqli_query($con,"select * from election where status=0");
$arr11=mysqli_fetch_array($res11);
$eid=$arr11['id'];
//echo $eid;
?>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <body>  
  <div class="container col-sm-12">

<?php
if(mysqli_num_rows($res10)>0)
{
?>
  <form action=""method="POST"><br>
  	<center><h3 style="background-color:#2F3C7E;color:white;">CANDIDATES</h3></center>
    

   <input type="hidden" name="uid" value='<?php echo $_REQUEST['uid'] ?>'>

     <label style="margin-top:30px;">ENTER THE TOKEN:</label><input type="text" name="token" class='form-control' required style="border-color:black;"><br>


<!-- male candidate -->

<center><h3 style="background-color:#2F3C7E;color:white;margin-top:30px;">MALE CANDIDATES</h3></center>

     


<?php


	  $sql2 = "select *  from candidate where email in(select email from student where tutor_id='$tutorid' and gender='male') and eid='$eid' and final_status=1";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
    if(mysqli_num_rows($result2)>1)
    {
    while($row=mysqli_fetch_array($result2))
    {
      $uemail=$row['email'];
      $res5=mysqli_query($con,"SELECT * from student where email='$uemail'");
      $arr5=mysqli_fetch_array($res5);


?>

<center>
  <button style="background-color:lightcyan;color:black;height:75px;width:300px;border-radius:6px;margin-top:10px;margin-right:10px;font-weight:bold;">
<img src="potrait.jpg" height="50px;" width="50px" style="border-radius:20px;margin-right:10px;"> 
    <?php echo $arr5['student_name'] ?>
      
</button><input type="radio" name="maleid" required value="<?php echo $uemail ?>">
 
  </center>   
<?php
}
?>
<button style="background-color:lightcyan;color:black;height:75px;width:300px;border-radius:6px;margin-top:10px;margin-right:10px;margin-left:20px;font-weight:bold;">N O T A</button><input type="radio" name="maleid" required value="nota">
<?php
}
else
{
echo "only one candidate";
}
?>

<!-- Female candidate -->

<center><h3 style="background-color:#2F3C7E;color:white;margin-top:50px;">FEMALE CANDIDATES</h3></center>
<?php

    $sql3 = "select *  from candidate where email in(select email from student where tutor_id='$tutorid' and gender='female') and eid='$eid' and final_status=1";
    $result3 = mysqli_query($con, $sql3) or die("Error in Selecting " . mysqli_error($connection));
if(mysqli_num_rows($result3)>1)
{
    while($row1=mysqli_fetch_array($result3))
    {
      $uemail=$row1['email'];
      //echo $uemail;
      $res6=mysqli_query($con,"SELECT * from student where email='$uemail'");
      $arr6=mysqli_fetch_array($res6);
      //echo $arr5[''];
?>

<center>

  <button style="background-color:lightcyan;color:black;height:75px;width:300px;border-radius:6px;margin-top:10px;margin-right:10px;font-weight:bold;">
<img src="potrait.jpg" height="50px;" width="50px" style="border-radius:20px;margin-right:10px;"> 
    <?php echo $arr6['student_name'] ?>
      
    </button><input type="radio" name="femaleid" required>
 
  </center>   
<?php
}
?>
<button style="background-color:lightcyan;color:black;height:75px;width:300px;border-radius:6px;margin-top:10px;margin-right:10px;margin-left:20px;font-weight:bold;">N O T A</button><input type="radio" name="femaleid" required value="nota">
<?php
}
else
{
  echo "only one candidate";
}
?> 





   <br>
     <center>  <input type="submit" value="VOTE" style="width:150px;background:green;margin-top: 20px;color: white;height:50px;border-radius:6px;font-weight: bold;"><center> 
  </form>

  <?php
}
else
{
  echo "<h3 style='text-align:center;color:grey;'>YOUR CLASS HAS ENDED!</h3>";
}
     
       
     ?>


 </div>
  </body>
  </html>