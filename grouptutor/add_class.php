<?php
include("../header_inner.php");
include("../connection.php");
$years = range(2000, strftime("%Y", time()));
$error="";



if(isset($_POST['add']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$classname=$_POST['class_name'];
$academic_year=$_POST['academic_year'];
$semester=$_POST['semester'];
$batch=$_POST['batch'];
$tutorid=$_POST['tutor'];
$res=mysqli_query($con,"select * from classes where email='$email'");
$res1=mysqli_query($con,"select * from classes where class_name='$classname' and semester='$semester' and batch='$batch' and academic_year='$academic_year'");
if(mysqli_num_rows($res)>0)
{
  $error="email id already exist";
}
elseif(mysqli_num_rows($res1)>0)
{
  echo "<script>alert('class already exist');</script>";
}
else
{
mysqli_query($con,"insert into login(user_name,password,type) values('$email','$password','grouptutor')");  
mysqli_query($con,"insert into classes(email,class_name,academic_year,semester,batch,tutor_id) values('$email','$classname','$academic_year','$semester','$batch','$tutorid')");
mysqli_query($con,"update tutors set status=1 where id='$tutorid'");
echo "<script>alert('class created successfully')
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

input[type=text],input[type=email],select, textarea {
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
<h3 style="background-color:#2F3C7E;color:white;font-weight:bold;width:95%;border-radius:6px;">ADD CLASS</h3>
</center>

<div class="container">
  


  <form action="" name="form1" method="post">

  <div class="row">
    <div class="col-25">
      <h6 class="c1">EMAIL</h6>
    </div>
 <span style="color:red;"><?php echo $error ?></span>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="Enter the email id" required value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" value="<?php echo $email ?>" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{3,3}$">
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <h6 class="c1">PASSWORD</h6>
    </div>
 
    <div class="col-75">
      <input minlength="6" type="text" id="password" name="password" placeholder="Enter the password (minimum 6 characters)" required value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>" value="<?php echo $password ?>">
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <h6 class="c1">CLASS NAME</h6>
    </div>
 
    <div class="col-75">
  <select name="class_name" id="class_name" required>
    <option value="mca">MCA</option>
    <option value="mba">MBA</option>
    <option value="nasb">NASB</option>
    <option value="cse">CSE</option>
    <option value="me">MECHANICAL</option>
    <option value="civil">CIVIL</option>
<option value="electrical">ELECTRICAL</option>
  </select>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <h6 class="c1">ACADEMIC STARTING YEAR</h6>
    </div>
 
    <div class="col-75">
      <select name="academic_year" id="academic_year" required>
  <option>Select Year</option>
  <?php foreach($years as $year) : ?>
    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
  <?php endforeach; ?>
</select>
    </div>
  </div>


<div class="row">
    <div class="col-25">
      <h6 class="c1">SEMESTER</h6>
    </div>

    <div class="col-75">
    
<select name="semester" id="semester" required>
  <option value="">select semester</option>
<option value="s1">s1</option>
<option value="s2">s2</option>
<option value="s3">s3</option>
<option value="s4">s4</option>
<option value="s5">s5</option>
<option value="s6">s6</option>
<option value="s7">s7</option>
<option value="s8">s8</option>
</select>
    </div>
  </div>
  

<div class="row">
    <div class="col-25">
      <h6 class="c1">BATCH</h6>
    </div>

    <div class="col-75">
  <select name="batch" id="batch" required>
    <option value="">select batch</option>
    <option value="A">A</option>
    <option value="B">B</option>
  </select>

    </div>
  </div>







  <div class="row">
    <div class="col-25">
      <h6 class="c1">DEPARTMENT</h6>
    </div>

    <div class="col-75">
     <select name="department" id="department" required>
     <option value="" disabled selected hidden>Select department</option>
     <?php
     $result=mysqli_query($con,"select DISTINCT department from tutors");
     while($row=mysqli_fetch_array($result))
     {
      ?>
      <option value="<?php echo $row['department'] ?>"><?php echo $row['department'] ?></option>
     <?php
     }
     ?>
   </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <h6 class="c1">TUTOR</h6>
    </div>

    <div class="col-75">
     <select name="tutor" id="tutor" required>
     <option value="">Select tutor</option>
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
