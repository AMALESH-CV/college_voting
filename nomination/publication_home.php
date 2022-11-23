<?php
include("tables.php");
include("../header_innerg.php");
$classid=$_REQUEST['id'];
echo $classid;
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



	.button1 {
  background-color:#2F3C7E;/* Green */
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
  .button2 {
  background-color:#2F3C7E;/* Green */
  border-radius:4px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 34.2%;
  margin-top:10px;
  margin-bottom:10px;
  cursor: pointer;
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
  <h2 style="text-align:center;background-color:#2F3C7E; color:white;font-family:arial;">PUBLICATIONS</h2>
  <div class="container inline">
    <a href="first_publication.php"><button class="button1">FIRST PUBLICATION</button></a>
    <br>
    <a href="second_publications.php"><button class="button2">SECOND PUBLICATION</button></a>
  </div>

