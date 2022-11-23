<?php
include("../header_inner.php");
include("../connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

body {
  font-family: serif;
}

    button {
  background-color: #2F3C7E;
  color: white;
  padding: 12px 20px;
  margin-left: 12px;
  border: none;
  border-radius: 26px;
  cursor: pointer;
  float: center;
  width:190px;
}

th {
   text-align: center;
  background-color:#2F3C7E;
 
  color:white;
  height:50px;

}


table {
  margin-top:20px;
  margin-left:auto;
  border-color:transparent;
  border-style: solid;
  background-color: lightcyan;
  margin-right: auto;
  margin-bottom:30px;
}
  
  td {
    text-align: center;
    height:35px;
  }



  </style>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>
<a href="add_tutor.php"><button>ADD GROUP TUTOR</button></a>

<?php
$sql1="Select * from tutors";
$res=mysqli_query($con,$sql1);
if(mysqli_num_rows($res)>0)
{
echo "
<table width='97%' class='t1' border='2px'>
  <tr>
  <th>TUTOR ID</th>
  <th>TUTOR NAME</th>
  <th>DEPARTMENT</th>
</tr>";
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";
echo "<td>".$row['tutor_id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['department']."</td>";
echo "</tr>";
}
}
else
{
echo "<h3 style='color:red'><i class='fas fa-exclamation-circle' style='font-size:36px'></i>Group Tutors are not added</h3>";
}
?>
</table>

</body>
</html>
