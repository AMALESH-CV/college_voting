<?php
include("header.php");
include("connection.php");
error_reporting(0);

?>
 <h4>Notifications</h4>
    
	
                              <?php

								$sel="select * from election where status='0'"; 
									
								
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{

                        
							?>
							<div class="well" style="margin: 20px; margin-bottom: -15px;">

								<img src='../nomination/uploads/notification.jpg'  width='60px' height='60px' style="float:right;" />

								<label>Election Name: </label><?php echo $row[election_name]; ?><br>
								<label>Nomination LastDate </label><?php echo $row[nomination_lastdate]; ?><br>
								<label>Election Date: </label><?php echo $row[elect_date]; ?><br>
                      
                             </div>
                             <br> <br>


							<?php
								}
                            
							?>  
                                
