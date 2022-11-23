<?php
include("header.php");
include("connection.php");
error_reporting(0);

?>
 <h4>Candidates</h4>
    
    
                              <?php

                               $sel1 ="SELECT * from election";

                                $result1=mysqli_query($con,$sel1);
                                $row1=mysqli_fetch_array($result1);

                                $sel="select * from candidate where status='1'"; 
                                    
                                
                                $res=mysqli_query($con,$sel);
                                while($row=mysqli_fetch_array($res))
                                {

                        
                            ?>
                            <div class="well" style="margin: 20px; margin-bottom: -15px;">
                               
                              <center> <img src='../student/uploads/<?php echo $row[photo]; ?>'  width='140px' height='120px'/> </center><br> 

                                <center><b><?php echo $row[candidate_name]; ?></b></center><br>
                                <?php echo $row[desc];?><br>
                                <label>CLASS NAME:  </label><?php echo $row[classname]; ?><br>

                                <label>ELECTION NAME:  </label><?php echo $row1[election_name]; ?><br>
                            
                        
                              <!--  <a href='nomination.php?id=<?php echo $row[id]?>&uid=<?php echo$_REQUEST[uid] ?>' class='btn btn-primary'
                                    style="margin-left: 55px;margin-top: 10px;">Submit Nomination</a> -->
                      
                             </div>
                             <br> <br>


                            <?php
                                }
                            
                            ?>  
                                
        