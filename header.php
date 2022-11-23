<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");
if($_SESSION['login_user']=="")
//header("location:../login.php");



?>
<?php
//header("location:NEW-JOB-VACANICES/register.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
<style>

@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?gzageq');
  src:  url('fonts/icomoon.eot?gzageq#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?gzageq') format('truetype'),
    url('fonts/icomoon.woff?gzageq') format('woff'),
    url('fonts/icomoon.svg?gzageq#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}


.box 
{

text-align:center;	
padding:30px;
color:#000;
font-size:1em;
border:1px solid #ccc;
   width:24%;
   margin:2px;
background:#F5F5F5;
transition: all .2s ease-in-out;
}

.box:hover
{
background:#fff;

border:1px solid #ccc;
transform: scale(1.1);
z-index:1000;
}
.news
{
background:#00a65a;
text-align:center;	
padding:30px;	
color:#FFF;
}
.blue {
    color: #00c0ef;
}
.gold {
    color: #f39c12;
}
.red {
    color: #f56954;
}
.green {
    color: #00a65a;
}
.violent
{
color:#FF8CFF;	
}
.gold2
{
color:#FFA523;	
}
.green2
{
color:#009688;	
}
.red2
{
color:#EE2149;	
}
.purple
{
color:#E040FB;	
}
.yellow
{
color:#ffeb3b;	
}
.orange
{
color:#FF5722;	
}


.glyphicon
{
font-size:22px;	
}
a
{
text-decoration:none;
}



a:hover
{
color:#666;	
}
#gold-button
{
	background:#f39c12;
	padding:10px;
	color:#FFF;
	float:left;
	margin:5px;
	
}
.borderless tr
{
border:0px;	
}

div.bottomfixed {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 30px;
    line-height: 15px;
    text-align: center;
    background: #f39c12;
    color: #fff;
    border-bottom: 1px solid #fff;
    padding: 10px;
    margin-top: 50px;
}
@media (max-device-width: 768px){
.box
{
	width: 98%;
margin:2px;

}
}


@media screen  and (min-device-width: 767px) and (max-width:1200px){
.box
{
	width: 48%;
margin:2px;

}
}
</style>

<div class="container-fluid">
<div class="row" style="background:#EEE;margin-bottom:30px;border-bottom:2px solid #ccc; box-shadow: 4px 4px 10px #ccc;"><br>
 <div class="col-md-12 col-xs-12 col-sm-12 theme" >
 <div style="float:left;"><a href="../dashboard/dashboard.php">
 <img src="../logo.png"  height="70" align='left' style="margin-bottom:12px;"></a>
      </div>
      <div style="float:right;" >
      
      <div id="gold-button">Helpline</div><div id="gold-button">Log Out</div>
      <div class="clearfix"></div>
       <div style="float:right;">
      Welcome Admin&nbsp;&nbsp;
      </div>
      </div>
</div></div>


<link type="text/css" rel="stylesheet" href="../calander/commondate/commondate.css?random=20051112" media="screen"></LINK>
	<SCRIPT type="text/javascript" src="../calander/commondate/commondate.js?random=20060118"></script>
    
</style>


