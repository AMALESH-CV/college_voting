<?php
include("tables.php");
include("../header_innerg.php");
//$classid=$_REQUEST['id'];
include("../connection.php");
include("tables.php");
$tutorid=$_SESSION['email'];
$sql2=mysqli_query($con,"select * from student where tutor_id='$tutorid'");
$arr2=mysqli_fetch_array($sql2);
// echo $arr2['class_name'];
$sql3=mysqli_query($con,"select * from election where status=0");
$arr3=mysqli_fetch_array($sql3);

?>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




		<link rel="stylesheet" type="text/css" href="datatables.min.css">
 
		<script type="text/javascript" src="datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>

<style>


.t1 {
  height:130px;
}
.t2 {
  height:50px;
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
  text-align:center;
  background-color:lightcyan;
  margin-top:10px;
}
th {
  border:1px solid;
  text-align:center;
  background-color:#2F3C7E;
  color:white;
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
  <h2 style="text-align:center;background-color:#2F3C7E;color:white;font-family:arial;">NOMINATIONS</h2>
  <br>

  <div class="container inline">
    <?php

    $sql = "SELECT * FROM candidate";
    //echo $sql;
    $res = mysqli_query($con,$sql);
      if (mysqli_num_rows($res )>0) {
        ?>
         <table style="width:80%" class="t1">
          <tr>
            <th colspan="2">ELECTION NAME</th>
<td><?php echo $arr3['election_name'] ?></td>
          </tr>
          <tr>
            <th colspan="2">CLASS NAME</th>
<td><?php echo $arr2['class_name'] ?></td>
          </tr>
</table>
         
        
           <table style="width:80%">
  <tr class="t2">
    <th>
      ROLL NO
    </th>
      <th>
        CANDIDATE NAME
    </th>
    <th>
        ATTENDENCE
    </th>
    <th>
ELIGIBILITY
    </th>
    <?php
 
  while($row=mysqli_fetch_array($res))
  {
    $email=$row['email'];
      $sql1 = "SELECT * FROM student where email='$email'";
    $res1 = mysqli_query($con,$sql1);
    $arr=mysqli_fetch_array($res1);
    $rollno=$arr['rollno'];
   $status=$row['status'];
   if($status==1)
   {
$button='<button style="border-radius:4px;background-color:darkblue;color:white;" disabled>ELIGIBLE FOR ELECTION</button>';
   }
   else
   {
$button='<button style="border-radius:4px;background-color:darkblue;color:white;" onclick="myFunction()">ELIGIBLE?</button>';
   }
    ?>
    <tr class="t2">
       <td>
      <?php echo $rollno ?>
      </td>
      <td>
        <?php echo $row['candidate_name']; ?>
      </td>
     <td>
      <form action="attendence_add.php" method="post">
<input type="number" placeholder="percentage(eg:76)" name="attendence" min=0 max=100 value="<?php echo $row['percentage'] ?>" required>
<input type="hidden" name="email" value=<?php echo $row['email'] ?>>
<input type="hidden" name="eid" value=<?php echo $row['eid'] ?>>
<input type="submit" style="border-radius:4px;background-color:darkblue;color:white;" value="ADD">
</form>
     </td>
<td>
 <a href="eligible.php?eid=<?php echo $row['eid'] ?>&cand=<?php echo $row['email']?> "><?php echo $button ?></a>
</td>
    </tr>
    <?php
  }
    }
    else
    {

    }
?>

  </div>

<script>
function myFunction() {
  confirm("Set the candidate to eligible");
}
</script>








