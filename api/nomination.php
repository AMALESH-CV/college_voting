<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
  th {
    text-align:center;
  }
  table{
    width:100%;
  }
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 6px;
  background-color:lightcyan;
  border-color:#2F3C7E;
  font-size: 16px;
  resize: none;
  margin-bottom:10px;
}
</style>



</head>
 <body>  
  <div class="container col-sm-12">
    <h3 style="background-color:#2F3C7E;color:white;text-align:center;padding-top:10px;padding-bottom:10px;">NOMINATION SUBMISSION</h3>
  <form action=""method="POST"><br>
  	<!--<center><h2><b><p style = "color:green">Nomination</p></b></h2></center> -->

<table>
  <tr>
    <th>
    <center> <img src='../nomination/uploads/nomination.png'  width='200px' height='200px' /> </center>
  </th>
</tr>
   <input type="hidden" name="uid" value='<?php echo $_REQUEST['uid'] ?>'>
   <input type="hidden" name="did" value='<?php echo $_REQUEST['id'] ?>'>
     
     <tr>
      <th style="padding-top:20px;">
     <textarea name="desc" rows="5" style="width:350px;" placeholder="TELL ABOUT YOURSELF" required></textarea>
   </th>
 </tr>
 <tr>
  <th style="height:90px;border: 2px solid #2F3C7E;background-color:lightcyan;">

   <font color="grey">CANDIDATE IMAGE</font><center><input type="file" name="image" style="margin-left: 5px;margin-top:20px;" required></center>
    </th>
  </tr>

  <tr>
    <th>
     <input type="submit" value="SUBMIT" name="submit" style="width:170px;background:#2F3C7E;color: white;height:40px;border-radius:4px;margin-top:20px;">
  </th>
</tr>
  </form>
     
     <?php
     error_reporting(0);
       include("connection.php");
       if(isset($_POST['submit']))
       {

         $u = $_REQUEST['uid'];
        $desc = $_POST['desc'];
        $image = $_POST['image'];  

        $res5=mysqli_query($con,"SELECT * from student where id='$u'");
        $arr5=mysqli_fetch_array($res5);
        $email=$arr5['email'];
        //echo $email;

        $res6=mysqli_query($con,"SELECT * from election where status='0'");
        $arr6=mysqli_fetch_array($res6);
        $eid=$arr6['id'];
        //echo $eid;


    $ins="INSERT INTO candidate(eid,email,description) VALUES('$eid','$email','$desc')";
        //echo $ins;
         $res= mysqli_query($con,$ins);
          if($res)
          {
             $id = mysqli_insert_id($con);
             $fileName = "student".$id.".jpg";
             file_put_contents("../nomination/uploads/".$fileName, base64_decode($imageFile));

            $sql = "UPDATE candidate SET photo ='$fileName' WHERE id ='$id'";
            mysqli_query($con,$sql);
            ?>
            <script type="text/javascript">
              alert("Nomination submitted Successfully");
              window.location='election.php?uid=<?php echo $u ?>';
            </script>
            <?php 
           }
          else{
            echo "failed";
          }

        }
     ?>


 </div>
  </body>
  </html>