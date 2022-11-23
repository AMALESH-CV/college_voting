<?php
include("../header_innerg.php");
 include("../connection.php");
$tutorid=$_SESSION['email'];
$i=0;
?>


		<link rel="stylesheet" type="text/css" href="datatables.min.css">
 
		<script type="text/javascript" src="datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>

<style>
.hiddentd
{
display:inline-block;
    width:180px;
    white-space: nowrap;
    overflow:hidden !important;
   
}


th {
   text-align: center;
  background-color:#2F3C7E;
 
  color:white;
  height:50px;

}
td {
text-align:center;
	height:50px;	
}
table {
	width: 100%;
	border-color:transparent;
	text-align:center;
	background-color:lightcyan;
}


</style>


<div class="">
<?php
$res5=mysqli_query($con,"select * from election where status=0");
if(mysqli_num_rows($res5)>0)
{

}
else
{
echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='add_student.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger' style='background-color:#2F3C7E'></form></div>";
}
?>

<h3>STUDENTS</h3>
<div class="clearfix"></div>
<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"  role="grid" aria-describedby="example_info" >

       
        
            
          <?php
	
		 
	$res=mysqli_query($con,"select * from student where tutor_id='$tutorid'");
	if(mysqli_num_rows($res))
	{
	?>
	
	<table border="2px">
	<tr>
		<th>ID</th>
		<th>ROLL NO</th>
		<th>ADMISSION NO</th>
		<th>NAME</th>
		<th>GENDER</th>
		<th>EDIT</th>
	</tr>
<?php
while($row=mysqli_fetch_array($res))
{
echo '<tr>';
echo '<td>'.$row['id'].'</td>';
echo '<td>'.$row['rollno'].'</td>';
echo '<td>'.$row['admission_no'].'</td>';
echo '<td>'.$row['student_name'].'</td>';
echo '<td>'.$row['gender'].'</td>';
echo '<td><a href="" style="color:red">click here</a></td>';
echo '</tr>';
}
?>
	</table>
	<?php
}
?>
	
	
