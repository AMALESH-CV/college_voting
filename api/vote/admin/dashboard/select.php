<?php
$table="church_settings";
//include("../header_inner.php");

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




<div class="">

<div class="clearfix"></div>
<table   style="background:#FFF;border:1px solid #ccc;" border="1" class='table'  align="center" cellpadding="10" cellspacing="10" >

       <tr><th>Church</th><th>Location</th><th>Software</th></tr>
        
            
          <?php
	
		  include("../connection.php");
	
	
	
	
	
	

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


	
	
	

	
	
		
   
  // $i=0;
   echo "<tbody>";
   
            
            
     
 	$result = mysqli_query($con,"SELECT * FROM $table ");
	

		while($row = mysqli_fetch_array($result))
		{
		$id=$row['0'];
		echo "<tr>";
		
			
			
			  $sql2 = "select *  from diocese where id='$row[9]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
$row2 =mysqli_fetch_array($result2);
	
		

			echo "";
				
			
			echo "<td >$row[1]
			
			</td><td>
			$row[2]
			
			</td>";
			
			echo "<td ><a href='$row[10]' target='_blank'>Software Link</a></td>";
		
		
		
		
		
		
		
		
		
		
			echo "
			
		
			</tr>";
		
		
		
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