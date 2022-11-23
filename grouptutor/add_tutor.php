<?php
include("../header_inner.php");
include("../connection.php");
$error="";
function validate()
{
  echo "hai";
}


if(isset($_POST['add']))
{
$tutorid=$_POST['tutor_id'];
$tutorname=$_POST['tutor_name'];
$department=$_POST['department'];
$res=mysqli_query($con,"select * from tutors where tutor_id='$tutorid'");
if(mysqli_num_rows($res)>0)
{
  $error="Tutor id already exist";
}
else
{
mysqli_query($con,"insert into tutors(tutor_id,name,department) values('$tutorid','$tutorname','$department')");
echo "<script>alert('Group tutor added successfully')
window.location='add_tutor_menu.php';</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
.c1 {
  color: white;
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 80%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label,h6 {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  margin-left: 120px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  width:130px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 8px;
  background-color:#2F3C7E;
  padding:20px;
  width:95%;
  margin-bottom:15px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  color:white;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row {
  margin-top:20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 80%;
    margin-top: 0;
  }
}
</style>
</head>
<body onload="document.form1.tutor_id.focus()">

<center>
<h3 style="background-color:#2F3C7E;color:white;font-weight:bold;width:95%;border-radius:6px;">ADD GROUP TUTOR</h3>
</center>

<div class="container">
  


  <form action="" name="form1" method="post" onsubmit="">

  <div class="row">
    <div class="col-25">
      <h6 class="c1">TUTOR ID</h6>
    </div>
 <span style="color:red;"><?php echo $error ?></span>
    <div class="col-75">
      <input type="text" id="tutor_id" name="tutor_id" placeholder="Enter the unique id (3 digit)" required maxlength="3" minlength="3" value="<?php if(isset($_POST['tutor_id'])){ echo $_POST['tutor_id']; } ?>" value="<?php echo $tutorid ?>">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <h6 class="c1">TUTOR NAME</h6>
    </div>
    <div class="col-75">
      <input type="text" id="tutor_name" name="tutor_name" placeholder="Enter the tutor name (Albhabets only)" required onchange="return(allLetter(document.form1.tutor_name))" value="<?php echo $tutorname ?>">
    </div>
  </div>

  <div class="row">
    
    <div class="col-25">
      <h6 class="c1">DEPARTMENT</h6>
    </div>
    
    <div class="col-75">
      <select id="department" name="department" required>
   
 <option value="">select option</option>
   <option value="science and humanities">Science and Humanities</option>
     
        <option value="civil engineering">Civil Engineering</option>
  <option value="electrical and electronics engineering">Electrical and Electronics Engineering</option>
      
 <option value="electronics and communication engineering">Electronics and Communication Engineering</option>

 <option value="computer science and engineering">Computer Science and Engineering</option>

  <option value="mechanical engineering">Mechanical Engineering</option>

<option value="naval architecture and ship building">Naval Architecture and Ship Building</option>

<option value="computer applications">Computer Applications</option>

<option value="management studies">Management Studies</option>

      </select>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
    
    </div>

    <div class="col-75">
    <input type="submit" name="add" value="ADD" id="add">
    </div>
  </div>


  </form>
</div>




<script type="text/javascript">
function allLetter(input)
      { 
      var letters =/^[A-Za-z ]+$/;
      if(input.value.match(letters))
      {
      document.getElementById("department").disabled=false;
       document.getElementById("add").disabled=false;
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      input.focus();
      document.getElementById("department").disabled=true;
      document.getElementById("add").disabled=true;
      return false;
      }
      }





</script>




</body>
</html>
