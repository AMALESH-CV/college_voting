<?php
include("tables.php");
include("../header_inner.php");
$tutorid=$_SESSION['email'];
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
</style>


<div class="">


<h3>STUDENTS</h3>
<div class="clearfix"></div>
<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0"  role="grid" aria-describedby="example_info" >

       
        
            
          <?php
	
		  include("../connection.php");
	
	
	
	
	
	
	
	
if(isset($_REQUEST['del_id']))
{
$del_id=$_REQUEST['del_id'];
mysqli_query($con,"delete from $table where id='$del_id'");
//if($del_id!="")
}
	?>
    <script>


function rem()
{
if(confirm('Are you sure you want to delete this record?')){
return true;
}
else
{
return false;
}
}


function rem2()
{
if(confirm('Are you sure you want to deactive this record?')){
return true;
}
else
{
return false;
}
}
</script>
    
	
	<?php


	
	
	

	
	
		  $result2 = mysqli_query($con,"SHOW FIELDS FROM $table");

 echo "<thead><tr>";

while ($row2 = mysqli_fetch_array($result2))
 {

  $name=$row2['Field'];
 if($i==1)
 {

 }
 else if($i==2)
 {

 }
 else if($i==3)
 {

 }
 else if($i==9)
 {
 	
 }
 else
 {
  echo "<th>".
  str_replace('_', ' ', $name)
  ."</th>";
}
 $i++;
 }
 if($_SESSION['user']=="admin" || $_SESSION['user']=="hospital")
		{
		
 /*echo "
<th>Update</th>
 
 <th>Del</th> "; */
		}
		echo"
 </tr></thead>";
   
  // $i=0;
   echo "<tbody>";
   
            
            
     
			if(isset($_REQUEST['cid']))
            {
                
            	$result = mysqli_query($con,"SELECT * FROM $table WHERE id='$_REQUEST[cid]'");
				//echo "SELECT * FROM $table WHERE patient_id='$_SESSION[patient_id]'";
            }
            else
            {
                $result = mysqli_query($con,"SELECT * FROM $table");
            }
          
$sl=1;
		while($row = mysqli_fetch_array($result))
		{
		$id=$row['0'];
		echo "<tr>";
		for($k=0;$k<$i;$k++)
		{
	if($k==0)
            {
                echo "<td > $sl</td>";
                
            }
     else if($k==1)
     {

     }
     else if($k==2)
     {

     }
     else if($k==3)
     {

     }
     else if($k==9)
     {

     }
		elseif($k==100)
			{
			  $sql2 = "select *  from patient where patient_id='$row[patient_id]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
		
		

			echo "<td >  $row2[patient_name]</td>";
				
			}
            
			elseif($k==31)
			{
				

			echo "<td> $row[status]";
			}
				
			elseif($k==31)
			{
				

			echo "<td class='hiddentd'> $row[content] </td>";
				
			}
			
			
				elseif($k==40)
			{
			  

			echo "<td > <img src='uploads/$row[$k]' width='100'></td>";
				
			}
			
			else
			{
			echo "<td >$row[$k]</td>";
			}
		
		
		
		
		
		}
		
		
		if($_SESSION['user']=="admin" || $_SESSION['user']=="hospital")
		{
		
		
		/*	echo "
			
			<td><a href='update.php?id=$id'>Update</a></td>
			
			<td><a href='?del_id=$id' onclick='return rem()'>Del</a></td>
		";  */
			
		}
		echo"</tr>";
		
		$sl++;
		
		}
        
        ?>
        </tbody>
    </table>
			
		



<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>

<div class="clearfix"></div>
	
    </div> 
    <?php
	
//	include("../footer_inner.php");
	?>