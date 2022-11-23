<?php
include("../header_inner.php");
include("../connection.php");
$res=mysqli_query($con,"select * from classes where status='active'");
while($row=mysqli_fetch_array($res))
{
?>

<div class="main">

<div class="card1" style="width: 20rem;">
  <img src="class-icon.png" class="card-img-top" alt="..." width="190px" height="150px">
  <div class="card-body">
    <h5 class="card-title" style="font-weight:bold;text-align:center;"><?php echo $row['class_name']; ?></h5>
       <h5 class="card-title" style="font-weight:bold;text-align:center;"><?php echo $row['academic_year']; ?></h5>
          <h5 class="card-title" style="font-weight:bold;text-align:center;">BATCH <?php echo $row['batch']; ?></h5>
    
    <center>
    <a href="nomination_admin.php?classid=<?php echo $row['email'] ?>"class="btn btn-primary" style="margin-bottom:10px;">OPEN</a>
  </center>
  </div>
</div>
<?php
}
?>

</div>

<style type="text/css">
  .main {
  height: 125vh;
  width: 100%;
  padding-left: 35px;
  display: flex;
}
.card1 {
  border-style:solid;
  height:fit-content;
  border-radius:8px;
}
</style>