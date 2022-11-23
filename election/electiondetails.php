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


    <link rel="stylesheet" type="text/css" href="datatables.min.css">
 
    <script type="text/javascript" src="datatables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>

<style>

.t1 {
  height:310px;
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
  <h2 style="text-align:center;background-color:#2F3C7E;color:white;font-family:arial;">ELECTION SCHEDULE</h2>
  <br>

  <div class="container inline">
    <?php

    $sql = "SELECT * FROM candidate";
    //echo $sql;
    $res = mysqli_query($con,$sql);
     ?>
         <table style="width:80%" class="t1">
          <tr>
            <th colspan="2">ELECTION</th>
<td><?php echo $arr3['election_name'] ?></td>
          </tr>

                      <tr>
            <th colspan="2">LAST DATE FOR NOMINATION SUBMISSION</th>
<td><?php echo $arr3['nomination_lastdate'] ?></td>
          </tr>
          <tr>
            <th colspan="2">FIRST PUBLICATION OF CANDIDATE LIST</th>
<td><?php echo $arr3['first_publication'] ?></td>
          </tr>
                    <tr>
            <th colspan="2">SECOND PUBLICATION OF CANDIDATE LIST</th>
<td><?php echo $arr3['second_publication'] ?></td>
          </tr>
                           <tr>
            <th colspan="2">ELECTION DATE</th>
<td><?php echo $arr3['elect_date'] ?></td>
          </tr>
                                 <tr>
            <th colspan="2">RESULT PUBLICATION DATE</th>
<td><?php echo $arr3['result_publication'] ?></td>
          </tr>
</table>
         
        

   
  </div>

