



<meta charset="utf-8">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />
<link href="bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<style>
body
{
 background-image: url('back.jpg');
    
}
.container
{
    margin:10px;

 
    background:white !important;
}
a
{
	text-decoration:none;
	color:#000;
}
a.btnW
{
  
    padding:10px !important;
    background:orange;
    color:#fff;
    
}
a.btnR
{
    font-size:1em !important;
    padding:10px !important;
    background:red;
     color:#fff;
    
    
}
a
{
    
text-decoration:none;
}
a:hover
{
    
text-decoration:none;

}
a:visited
{
	color:#000;
}
h4
{
    background:#889A9A;
    padding:10px;
 color:white;   
}

.boxS {
  border: 1px solid #ccc;
  padding: 4px;
  box-shadow: 5px 6px #ccc;
  margin-bottom:15px;
}

.boxSS {
  border: 1px solid #ccc;
  padding: 4px;

  margin-bottom:10px;
}
.boxG
{
	padding:16px;
	border:1px solid #889A9A;
	font-size:1.4em;
	
	
}
.folder
{
	width:25px;
	float:left;
	margin-right:10px;
	
}
table{
	 width:100%;
}
table,td,th{
	
  border: 1px solid;
  border-collapse: collapse;
}

th{
	align:left !important;
}
</style>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<style>


.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

<?php
$id=$_REQUEST['uid'];
?>