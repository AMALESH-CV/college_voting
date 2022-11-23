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
button,input[type="submit"]{
	color:#2F3C7E;
	background-color:lightcyan;
	margin-top:30px;
	border-radius:4px;
	width:150px;
	font-weight:bold;
	height:50px;
	margin-left:42%;
}
</style>


<div class="">


<h2 style="text-align:center;background-color:#2F3C7E;color:white;">TOKENS</h2>
<div class="clearfix"></div> 

       
        
            
          <?php
	
		  include("../connection.php");
$btn="";
$sql2=mysqli_query($con,"SELECT * from election where status='0'");
$sql1=mysqli_query($con,"SELECT * from tokens");
if(mysqli_num_rows($sql1)>0)
{
$btn="disabled";
}
else
{
	if(mysqli_num_rows($sql2)>0)
	{
	$btn="";	
	}
	else
	{
	$btn="disabled";
	}
}

		  if(isset($_POST['send']))
		  {
	$sql=mysqli_query($con,"SELECT s.email from student s,classes c where s.tutor_id=c.email and c.status='active'");
	if(mysqli_num_rows($sql1)>0)
	{
	}
	else
	{
	while($row=mysqli_fetch_array($sql))
	{
$data2=rand(1000,9999);
$hash =hash_hmac('md5', $data2, 'any_secretkey');
$email=$row['email'];
mysqli_query($con,"INSERT into tokens (stud_email,token) value ('$email','$hash')");
	}
	echo "<script>alert('token sended successfully')</script>";
}
}
?>
<!-- <br>
	<input type="text" value="Hello World" id="myInput">
<button onclick="myFunction()">Copy text</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999); 
  navigator.clipboard.writeText(copyText.value);  
  alert("Copied the text: " + copyText.value);
}
</script> -->
	
	
	
<?php


		// $data2=rand(1000,9999);
		// $hash =hash_hmac('md5', $data2, 'any_secretkey');
		// mysqli_query($con,"INSERT into tokens (token) value ('$hash')");
		//$email="gettoanish@gmail.com";
// 		$email="alanbaby333@gmail.com";
// 		$message=$hash;
// $subject='Election Token';
// 		echo "<td><a href='https://alc-training.in/gateway.php?email=$email&msg=$message&subject=$subject' target='_blank'><button>Send Token</button></a></td>";
		
        
        ?>
   

   <form action="" method="post">
   	<input type="submit" name="send" value="SEND TOKEN" <?php echo $btn ?> >
   	
   </form>
		






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



