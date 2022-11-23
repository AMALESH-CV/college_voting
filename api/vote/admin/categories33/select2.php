<?php
include("table.php");


$del_id=0;
$i=0;
?>


	


<div class="">
<?php

	echo "<div class='col-sm-2' style='float:right;margin-bottom:10px;'></div>";
	
?>
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


	
	
	

	
	
		

 echo "<thead><tr>";


 echo "
 <th>Members Details</th>


 </tr></thead>";
   
  // $i=0;
   echo "<tbody>";
   
            
            
        
	$result = mysqli_query($con,"SELECT * FROM $table where family_id='$_REQUEST[mid]'");

		while($row = mysqli_fetch_array($result))
		{
		$id=$row['0'];
		echo "<tr>";
		

			echo "<td >Name : $row[name] <br>
			Relation : $row[relation]<br>
			Mobile : $row[mobile]	<br>
			E Mail : $row[mail_id]	<br>
					";
				
		
		
		
		
		
		
		
		
		
		
		
		
			echo "
			
			<a href='update.php?id=$id' target='_blank'>Update</a> &nbsp;&nbsp;
			
			<a href='?del_id=$id&mid=$_REQUEST[mid]' onclick='return rem()'>Del</a></td>
		
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