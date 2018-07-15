<?php
 session_start();
 if(!isset($_SESSION["adminlogin"]))
 {
	 header("location:index.php");
 }
 
?>

<html>
<head>
<meta charset="utf-8">
<title>TRA</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />


<style>

</style>
</head>

<body>
 <?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 
 </div>
 <img src="images/slid.jpg" style="margin-top:7px" width="100%" height="380px"  alt=""/> 
 <br><br>
<?php include'footer.php' ?>
</body>
</html>