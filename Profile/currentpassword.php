<?php

include("../header_innerg.php");

include("../connection.php");
$message="";
$tutorid=$_SESSION['email'];
if(isset($_POST['change']))
{
$cpass=$_POST['cpass'];
$sql1="select password from login where user_name='$tutorid'";
$res=mysqli_query($con,$sql1);
$arr=mysqli_fetch_array($res);
//echo $arr['password'];
$dbpass=$arr['password'];
if($cpass==$dbpass)
{
  ?>
  <script type="text/javascript">
    window.location='changepassword.php';
  </script>
 <?php
}
else
{
$message="incorrect password";
}
}

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
	padding-left: 125px;
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

input[type="PASSWORD"] {
width: 320px;
height: 40px;
border-radius: 8px;
border-color:lightgrey;
background-color:lightyellow;
color: #2F3C7E;
margin-left: 10px;
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
  <h2 style="text-align:center;background-color:#2F3C7E;color:white;font-family:arial;">PASSWORD</h2>
  <br>

  <div class="container inline">
   
    <table  style="background:darkblue;color:white;width:86%;">
                        
                           
                           
   <form method="post">                      
<tr>
  <td class="t3" colspan="2">CURRENT PASSWORD:
  <input type="PASSWORD" name="cpass" required><b style="color:red;margin-left:10px;font-size:18px;"><?php echo $message; ?></b> </td>
     </tr>

    
  <tr>                     
  <td class="t3" colspan="2" style="height:80px"><input type="submit" style="margin-left:170px; background-color: #2F3C7E; color: white; height: 40px; border-radius: 10px;" value="CHANGE PASSWORD" name="change">
 </td>
        
</tr>
                            

                            
                                
                            
                        </table>
   
  </div>

