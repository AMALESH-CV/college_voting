<?php
include("tables.php");
include("../header_inner.php");
include("../connection.php");
$del_id=0;
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

$res=mysqli_query($con,"select * from tutors");
if(mysqli_num_rows($res)>0)
{
	
	echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><form action='add_class.php' method='post'><input type='submit' name='view' value='Add New' class='form-control btn-danger' style='background-color:#2F3C7E'></form></div>";
}
else
{
	echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'><h5><a href='add_tutor_menu.php' style='color:red;'>please add group tutors to create class</a></h5></div>";
}

?>
<h3>CLASS</h3>
<?php
$res=mysqli_query($con,"select * from classes");
if(mysqli_num_rows($res)>0)
{
	?>
<table border="2px">
<tr>
<th>ID</th>
<th>CLASS NAME</th>	
<th>ACADEMIC YEAR</th>
<th>BATCH</th>
<th>TUTOR ID</th>
<th>EMAIL</th>
<th>UPDATE</th>
<th>STATUS</th>
</tr>
<?php
while($row=mysqli_fetch_array($res))
{
echo '<tr>';
echo '<td>'.$row['id'].'</td>';
echo '<td>'.$row['class_name'].'</td>';
echo '<td>'.$row['academic_year'].'</td>';
echo '<td>'.$row['batch'].'</td>';
echo '<td>'.$row['tutor_id'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td><a href="" style="color:red;">click here</a></td>';
?>
<td>
<form action="class_status.php" method="post">
<input type="hidden" value="<?php echo $row['tutor_id'] ?>" name="tutorid">
<input type="hidden" name="classid" value="<?php echo $row['id'] ?>">
<select name="status" required><option value="">select option</option>
<option value="active" <?php if ($row['status'] == 'active') echo ' selected="selected"';?>>active</option>
<option value="inactive" <?php if ($row['status'] == 'inactive') echo ' selected="selected"' ?>>inactive</option>
</select>
<input type="submit" name="set" value="set">
</form>
</td>
<?php
echo '</tr>';
}
?>
</table>
<?php
}
else
{
	echo "<H5 style='margin-top:40px;'>CURRENTLY NO CLASSES AVAILABLE</H5>";
}
?>
       
        
            
      
	
		  
	
	
	
	
	
	