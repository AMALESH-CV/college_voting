<?php
include("../header_inner.php");
include("table.php");

$k=0;
?><!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body >
<!--<style>
div
{
text-transform:capitalize;
margin-bottom:5px;	
}

</style>-->
<?php

include("data_validation.php");
include("../connection.php");



echo "<div class='col-sm-12' style='background:#F9F9F9;'>";

$g=0;

$result = mysqli_query($con,"SHOW FIELDS FROM $table");

$i = 0;


echo "<form action='insert.php' method='post' enctype='multipart/form-data' name='register_form' id='register_form'>";
while ($row = mysqli_fetch_array($result))
 {

  $name=$row['Field'];
  $type=$row['Type'];
  $type = explode("(", $type);
  $type_only=$type[0];
$i++;

$g++;


//echo " <div ><div >";



if($i==1 )
{
	
	//echo "<td>Male <input type='radio' name='$name'> </td>";
	
}
 elseif($i==200 )
  {
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  Family Name</label>";
	echo "<select name='$name' class='form-control' required>";  
	  
	  $sql2 = "select *  from family_creation where id='$_REQUEST[mid]'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[id]'>$row2[family_name]</option>";
	}
	
	
	
	  $sql2 = "select *  from family_creation ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));

    echo "<option value=''>Select Family Group</option>";
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[id]'>$row2[family_name]</option>";
	}
	
	
	
	
	
	
	
	
	
	
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
      
    
  }
  
elseif($i==100)
{
	$dateT=date("Y-m-d H:i:s");
	echo "<input type='hidden' name='$name' value='$_SESSION[userid]' class='form-control' >";
}

elseif($i==500)
{
	$dateT=date("Y-m-d H:i:s");
	echo "<input type='hidden' name='$name' value='$dateT' class='form-control' >";
}

 elseif($i==400 )
  {
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  
	  $sql2 = "select *  from relation ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
echo "<select name='$name' class='form-control'>";
    echo "<option value=''>Select One</option>";
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[relation]'>$row2[relation]</option>";
	}
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
      
    
  }
  
  
  
  
  
  
  
  
   elseif($i==500 )
  {
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  
	  $sql2 = "select *  from members where family_id='$_REQUEST[mid]' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
echo "<select name='$name' class='form-control'>";
    echo "<option value=''>Select One</option>";
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[name]'>$row2[name]</option>";
	}
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
      
    
  }
  
  
  
  
  
  
  
  
  
  
  
  
  


 elseif($i==700 )
  {
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  
	 
echo "<select name='$name' class='form-control'>";
    echo "<option >Male</option>";
	echo "<option >Female</option>";
	echo "<option >Other</option>";
   
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
      
    
  }



 elseif($i==6 )
  {
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  
	  $sql2 = "select *  from blood ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
echo "<select name='$name' class='form-control'>";
    echo "<option value=''>Select One</option>";
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[blood]'>$row2[blood]</option>";
	}
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
      
    
  }
  



else
{

  if($type_only=="varchar" || $type_only=="int" || $type_only=="int" || $type_only=="tinyint" )
  {
	  echo "
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label><input type='text' name='$name'class='form-control' > </div>
                                        </div>";
	
      
    
  }
  
  
   if($type_only=="date" )
  {
	  $date=date("Y-m-d");
	  echo "
	  
	  
	  
	  <div class='col-md-4'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='text' name='$name'  class='form-control' value='' id='t$k'></div></div>";
	  
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
	  
	  <input type='file' name='$name' class='form-control'></div></div>";
  }
  if($type_only=="text" )
  {
	  echo "<div class='col-md-4'>
                                            <div class='form-group'><label>
											
											 ".str_replace('_', ' ', $name)."</label>
											
											<textarea name='$name' class='form-control'></textarea>
											</div>
											</div>";
  }
  
  
  

}
  


//echo "</div></div><br>";

  
 
 
 
 
 
  
}



echo "
<div class='col-md-12'>
                              <div class='col-md-3'>              <div class='form-group'>
											<input type='submit' value='Submit' name='submit' class='form-control btn-fill btn-primary'>";



echo "</form>";



echo "
</div></div><div class='col-md-3'>   <div class='form-group'>


</div></div>";


echo "</div></div>




";



mysqli_free_result($result);










echo "</div>



<div class='clearfix'></div>


";






mysqli_close($con);

//include("../footer_inner.php");

?>
