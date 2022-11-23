<?php
include("header.php");
include("connection.php");
error_reporting(0);

?>
 <h4>View Review</h4>
    
    
                              <?php

                                $sel="select * from review"; 
                                    
                                
                                $res=mysqli_query($con,$sel);
                                while($row=mysqli_fetch_array($res))
                                {

                                    $sel2="select * from cust_registration where id='$row[user_id]'"; 
                                    
                                
                                $res2=mysqli_query($con,$sel2);
                                $row2=mysqli_fetch_array($res2);

                        
                            ?>
                            <div class="well" style="margin: 20px; margin-bottom: -15px;" >
                                

                                <label>User Name: </label><?php echo $row2[Name]; ?><br>
                                <label>Feedback:</label><?php echo $row[feedback]; ?><br>
                                <label>Complaint:</label><?php echo $row[complaint]; ?><br>
                                 
                                
                      
                             </div>
                             <br> <br>


                            <?php
                                }
                            
                            ?>  
                                
