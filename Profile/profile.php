<?php

include("../header_innerg.php");

include("../connection.php");

$tutorid=$_SESSION['email'];

//echo $tutorid;

?>


		<link rel="stylesheet" type="text/css" href="datatables.min.css">
 
		<script type="text/javascript" src="datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>

<style>
body {
	font-size: 16px;
	font-family:serif;
}
.t1 {
  height:130px;
}
.t2 {
  height:50px;
}
.t3 {
	font-weight: bold;
	padding-left: 35px;
}
	.button {
  background-color:black;/* Green */
  border-radius:4px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 35%;
  margin-top:10px;
  margin-bottom:10px;
  cursor: pointer;
}

table,td {
  border:1px solid;
  background-color:lightcyan;
  margin-top:10px;
  color: black;
  height: 55px;
  border-color: white;
  font-family:sans-serif;
}
th {
  border:1px solid;
  text-align:center;
  background-color:lightcyan;
  color:black;
}

input[type="text"] {
width: 300px;
height: 40px;
border-radius: 8px;
border-color:lightgrey;
background-color:lightyellow;
color: #2F3C7E;
padding-left:20px;
}
.hiddentd
{
display:inline-block;
    width:180px;
    white-space: nowrap;
    overflow:hidden !important;

   
}
</style>
<div class="main">
  <h2 style="text-align:center;background-color:#2F3C7E;color:white;font-family:arial;">PROFILE</h2>
  <br>

  <div class="container inline">
   
    <table  style="background:darkblue;color:white;width:86%;">
                        
                           
                              <?php
                                
                                $sel="select * from classes where email='$tutorid'";
                                $res=mysqli_query($con,$sel); 
                                $arr=mysqli_fetch_array($res);
                                $tut_id=$arr['tutor_id'];
                                //echo $tut_id;
                    $res5=mysqli_query($con,"select * from tutors where id='$tut_id'");
                    $arr5=mysqli_fetch_array($res5);


                            ?> 
                         
                            <tr>
                          
                       <td class="t3">NAME:</td>
  <td><input type="text" value="<?php echo $arr5['name']?>" disabled></td>
 </tr>
<tr>
  <td class="t3">CLASSNAME:</td>
  <td>
  <input type="text" value="<?php echo $arr['class_name']?>" disabled></td>
     </tr>

     <tr>
  <td class="t3">BATCH:</td>
  <td>
  <input type="text" value="<?php echo $arr['batch']?>" disabled></td>
     </tr>

     <tr>  
     <td class="t3">SEMESTER:</td>
  <td>
  <input type="text" value="<?php echo $arr['semester']?>" disabled></td>
     </tr>

     <tr>                     
  <td class="t3">EMAIL:</td>
  <td><input type="text" value="<?php echo $arr['email']?>" disabled></td>
        
</tr>

  <tr>                     
  <td class="t3" colspan="2" style="height:80px">
<a href="currentpassword.php">
 <button style="margin-left:267px; background-color: #2F3C7E; color: white; height: 40px; border-radius: 10px;">CHANGE PASSWORD</button></a></td>
        
</tr>
                            

                            
                                
                            
                        </table>
   
  </div>

