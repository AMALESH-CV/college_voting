<?php
include("header.php");
include("connection.php");
error_reporting(0);
$btn="";
$uid=$_REQUEST['uid'];


$res2=mysqli_query($con,"SELECT * from student where id='$uid'");
$arr2=mysqli_fetch_array($res2);
$tutorid=$arr2['tutor_id'];

$res3=mysqli_query($con,"SELECT * from classes where email='$tutorid' and status='active'");


date_default_timezone_set('Asia/Kolkata');

$timestamp = time();
$date_time = date("Y-m-d", $timestamp);

$res1=mysqli_query($con,"SELECT * from election where status='0'");
$arr1=mysqli_fetch_array($res1);
$nom_date=$arr1['nomination_lastdate'];
//echo $nom_date;

?>
<style type="text/css">
	body {
		font-family: serif;
		/*background-image: url("background.jpg");*/
	}
	td,th {
		height:60px;
		text-align:center;
		border-color:transparent;
	}
	table {
	width: 100%;
	text-align:center;
	background-color:lightcyan;
}
</style>
 <h3 style="text-align:center;background-color:#2F3C7E;color:white;padding:5px;">ELECTION SCHEDULE</h3>
    
	
                              <?php

								$sel="select * from election where status='0'";
								$res=mysqli_query($con,$sel);
								if(mysqli_num_rows($res3)>0)
								{
								if(mysqli_num_rows($res)>0)
								{
								while($row=mysqli_fetch_array($res))
								{

                        
							?>
							<div class="well" style="margin-bottom: -15px;">
<table width=200px;>
	<tr>

						<th>ELECTION</th>
							<td><?php echo $row[election_name]; ?></td>
					</tr>
					<tr>
					<th>NOMINATION LAST DATE</th>
					 <td><?php echo $row[nomination_lastdate]; ?></td>
				</tr>
				<tr>
					<th>FIRST PUBLICATION</th>
					<td><?php echo $row[first_publication]; ?></td>
				</tr>
				<tr>
			<th>SECOND PUBLICATION</th>
				<td><?php echo $row[second_publication]; ?></td>
		</tr>
		<tr>
					<th>ELECTION DATE</th>
						<td><?php echo $row[elect_date]; ?></td>
				</tr>
				<tr>
					<th>RESULT PUBLICATION</th>
					<td><?php echo $row[result_publication]; ?></td>
				</tr>

</table>
<?php
if($date_time <= $nom_date)
{
	$btn="";
}
else
{
$btn="disabled";	
}
?>

<center>
<a href='nomination.php?id=<?php echo $row[id]?>&uid=<?php echo$_REQUEST[uid] ?>'>
	<button style="margin-top:30px;height:50px;font-weight:bold;color:white;background-color:#2F3C7E;border-radius:8px;width:70%;"<?php echo $btn ?> >
	SUBMIT NOMINATION</button>
</a>
</center>

                      
                             </div>
                             <br> <br>


							<?php
								}
							}
							else
							{
								echo "<h4 style='font-weight:bold;text-align:center;margin-top:50%;background-color:transparent;color:black;'>CURRENTLY NO ELECTIONS SCHEDULED!</h4>";
							}
						}
						else
						{
						echo "<h3 style='text-align:center;margin-top:50%'>YOUR CLASS HAS ENDED!</h3>";	
						}
                            
							?>  
                                
        