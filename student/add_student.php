<?php
include("../header_innerg.php");
include("../connection.php");
$tutorid=$_SESSION['email'];
//echo $tutorid;


if(isset($_POST['add']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$admissionno=$_POST['admission_no'];
$studentname=$_POST['student_name'];
$rollno=$_POST['roll_no'];
$gender=$_POST['gender'];
$res1=mysqli_query($con,"select * from student where email='$email'");
$res2=mysqli_query($con,"select * from student where admission_no='$admissionno'");
$res3=mysqli_query($con,"select * from student where rollno='$rollno'");
if(mysqli_num_rows($res1)>0)
{
echo "<script>alert('email already exist');</script>"; 
}
elseif(mysqli_num_rows($res2)>0)
{
echo "<script>alert('Admission number already exist');</script>";
}
elseif(mysqli_num_rows($res3)>0)
{
echo "<script>alert('Roll number already exist');</script>";
}
else
{  
mysqli_query($con,"insert into student(tutor_id,email,password,admission_no,student_name,rollno,gender) values('$tutorid','$email','$password','$admissionno','$studentname','$rollno','$gender')");
echo "<script>alert('student added successfully')
window.location='select.php';</script>";
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

input[type=text],input[type=email],input[type=number],select, textarea {
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

input[type=reset] {
   background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  margin-left: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  width:130px;
}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  margin-left: 140px;
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
<body>

<center>
<h3 style="background-color:#2F3C7E;color:white;font-weight:bold;width:95%;border-radius:6px;">ADD STUDENT</h3>
</center>

<div class="container">
  


  <form action="" name="form1" method="post">

  <div class="row">
    <div class="col-25">
      <h6 class="c1">EMAIL</h6>
    </div>
 <span style="color:red;"><?php echo $error ?></span>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="Enter the email id" required value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{3,3}$">
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <h6 class="c1">PASSWORD</h6>
    </div>
 
    <div class="col-75">
      <input minlength="6" type="text" id="password" name="password" placeholder="Enter the password (minimum 6 characters)" required value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>">
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <h6 class="c1">ADMISSION NUMBER</h6>
    </div>
 
    <div class="col-75">
 <input  type="number" id="admission_no" name="admission_no" placeholder="Enter the admission number" required value="<?php if(isset($_POST['admission_no'])){ echo $_POST['admission_no']; } ?>">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <h6 class="c1">STUDENT NAME</h6>
    </div>
 
    <div class="col-75">
 <input  type="text" id="student_name" name="student_name" placeholder="Enter the student name" required value="<?php if(isset($_POST['student_name'])){ echo $_POST['student_name']; } ?>">
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <h6 class="c1">ROLL NO</h6>
    </div>

    <div class="col-75">
    
 <input min="1" max="120" type="number" id="roll_no" name="roll_no" placeholder="Enter the roll number" required value="1">
    </div>
  </div>
  

<div class="row">
    <div class="col-25">
      <h6 class="c1">GENDER</h6>
    </div>

    <div class="col-75">
<select name="gender" required>
  <option value="">select option</option>
  <option value="male" <?php if($_POST['gender']=="male"){  echo "selected";} ?> >male</option>
  <option value="female" <?php if($_POST['gender']=="female"){  echo "selected";} ?>>female</option>
  <option value="other" <?php if($_POST['gender']=="other"){  echo "selected";} ?>>other</option>
</select>


    </div>
  </div>













  <div class="row">
    <div class="col-25">
  <input type="reset" name="reset" value="RESET" id="reset">
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





$(document).on('change','#department',
function() {
  var department= $(this).val();
  if(department) {
  $.ajax( {
      type:'POST',
      url:'backend-script.php',
      data:
      {'department':department},
      success:function(result) {
        $('#tutor').html(result);
      }
  } );
} else {
   $('#tutor').html('<option value=" ">Select tutor</option>');
   
}
} ) ;



</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>


</body>
</html>
