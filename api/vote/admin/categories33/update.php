<?php
include("table.php");
include("../header_inner.php");
include("data_validation.php");
include("../connection.php");
$k=0;
?>


<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
 
  <script src="bootstrap.min.js"></script>
</head>
<body>



<?php
$id=$_REQUEST['id'];
$result = mysqli_query($con,"SHOW FIELDS FROM $table");

$i = 0;
echo "<form action='update_data.php?id=$id' method='post' enctype='multipart/form-data'>";
while ($row = mysqli_fetch_array($result))
 {

  $name=$row['Field'];
  $type=$row['Type'];
  $type = explode("(", $type);
  $type_only=$type[0];
$i++;

$result2 = mysqli_query($con,"SELECT * FROM $table where id='$id'") or die(mysql_error());
$row2= mysqli_fetch_array($result2);

$datas=$row2[$name];
//echo $datas;

if($i==1 )
{
	$mid=$row2['family_id'];
	// echo "<div class='col-sm-2'>".str_replace('_', ' ', $name)."</div><div class='col-sm-4'> <input type='text' name='$name' value='$datas' readonly></div>";
}
elseif( $i==2 )
{
	
	 echo "<input type='hidden' name='$name' value='$datas' ></div>";
}



 elseif($i==4 )
  {
	  echo "
	   <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label> ";
	  
	
	echo "<select name='$name' class='form-control'>";
	
	  
	  $sql2 = "select *  from relation where relation='$row2[relation]'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option >$row2[relation]</option>";
	}
	
	  $sql2 = "select *  from relation where relation!='$row2[relation]'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option >$row2[relation]</option>";
	}
	
	
	
	
	
	
	
	  echo "</select>";
	    
	  echo "</div></div>
                                        ";
	
      
    
  }
  
  
  
  
  
  
  
  
  
  
  
  
   elseif($i==5 )
  {
	  echo "
	   <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label> ";
	  
	

	
	  
echo "<select name='$name' class='form-control'>";
   
   
		
		echo "<option >$datas</option>";
	
	  
	  
	  
	  
	    $sql2 = "select *  from members where family_id='$_REQUEST[mid]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

  
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[name]'>$row2[name]</option>";
	}
	  echo "</select>";
	  
	  
	  
	  
	  
	    
	  echo "</div></div>
                                        ";
	
      
    
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
	
  
  
  
   elseif($i==6 )
  {
	  echo "
	   <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label> ";
	  
	
	echo "<select name='$name' class='form-control'>";
	
	  
	  $sql2 = "select *  from blood where blood='$row2[blood_group]'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option >$row2[blood]</option>";
	}
	
	  $sql2 = "select *  from blood where blood!='$row2[blood_group]'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option >$row2[blood]</option>";
	}
	
	
	
	
	
	
	
	  echo "</select>";
	    
	  echo "</div></div>
                                        ";
	
      
    
  }
  
  
  
  
  
  
  
  
  
  
  
  
   elseif($i==7 )
  {
	  echo "
	   <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label> ";
	  
	
	echo "<select name='$name' class='form-control'>";
	
	echo "<option >$datas</option>";
		echo "<option >Male</option>";
	
	echo "<option >Female</option>";
	echo "<option >Other</option>";
	
	
	
	
	
	
	  echo "</select>";
	    
	  echo "</div></div>
                                        ";
	
      
    
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  













  elseif($type_only=="varchar" || $type_only=="int" || $type_only=="int" || $type_only=="tinyint"  )
  {
	  
	  
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label><input type='text' name='$name' value='$datas' class='form-control' > </div>
                                        </div>";
	  
	  
	  
  }
  
  
    elseif($type_only=="date" )
  {
	  echo "
	  <div class='col-md-4'>
                                            <div class='form-group'><label>".str_replace('_', ' ', $name)."</label> <input type='text' name='$name' id='t$k' value='$datas' class='form-control'></div></div>";
	  
	  ?>
	  
	    <script type="text/javascript">
$(function() {
	$('#t<?php echo $k;?>').datepick();
	
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
      <?php
	  $k++;
  }
  
  
  
  
 if($type_only=="tinytext" )
  {
	  echo "
	  
	  	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='file' name='$name' class='form-control' value='$datas' ></div></div>";
  }
  if($type_only=="text" )
  {
	  echo "<div class='col-md-4'>
                                            <div class='form-group'><label>
											
											 ".str_replace('_', ' ', $name)."</label>
											
											<textarea name='$name' class='form-control'>$datas</textarea>
											</div>
											</div>";
  }
  
  
  

  
  
}


echo "
<div class='col-md-12'>
                              <div class='col-md-3'>              <div class='form-group'>
											<input type='submit' value='Update' name='submit' class='form-control btn-success'>";



echo "</form>";



echo "
</div></div><div class='col-md-3'>   <div class='form-group'>
<form action='../members/form.php?mid=$row2[family_id]' method='post'><input type='submit' name='view' value='Back ' class='form-control btn-danger'></form></div></div>
<div class='clearfix'></div>

</div>
";



mysqli_free_result($result);






echo "<div class='clearfix'></div>
";










mysqli_close($con);
?>
