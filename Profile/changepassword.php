<?php

include("../header_innerg.php");

include("../connection.php");

$tutorid=$_SESSION['email'];

if(isset($_POST['change']))
{
$npass=$_POST['pass2'];
$sql1="update login set password='$npass' where user_name='$tutorid'";
mysqli_query($con,$sql1);
echo "<script>
alert('Password updated successfully');
window.location.href='profile.php';
</script>";
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

input[type="password"] {
width: 300px;
height: 40px;
border-radius: 8px;
border-color:lightgrey;
background-color:lightyellow;
color: #2F3C7E;
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
                                

                                $sel="select * from grouptutor where email='$tutorid'";
                                $res=mysqli_query($con,$sel); 
                                $arr=mysqli_fetch_array($res);
                                	
                               


                            ?> 
            
            <form action="" method="post">               
                            <tr>
             

                       <td class="t3">NEW PASSWORD:</td>
  <td><input type="PASSWORD" name="pass1" id="pass1" required minlength="6"></td>
 </tr>
<tr>
  <td class="t3">RETYPE NEW PASSWORD:</td>
  <td>
  <input type="password" name="pass2" id="pass2" required minlength="6"></td>
     </tr>



  <tr>                     
  <td class="t3" colspan="2" style="height:80px"><input type="submit" style="margin-left:267px; background-color: #2F3C7E; color: white; height: 40px; border-radius: 10px;" value="CHANGE PASSWORD" name="change"></td>
        
</tr>
           </form>                 

                            
                                
                            
                        </table>
   
  </div>


 <script>
                window.onload = function () {
                    document.getElementById("pass1").onchange = validatePassword;
                    document.getElementById("pass2").onchange = validatePassword;
                }

                function validatePassword() {
                    var pass2 = document.getElementById("pass2").value;
                    var pass1 = document.getElementById("pass1").value;
                    if (pass1 != pass2)
                document.getElementById("pass2").setCustomValidity("Passwords Don't Match");
                    else
                        document.getElementById("pass2").setCustomValidity('');
                    //empty string means no validation error
                }
            </script>
