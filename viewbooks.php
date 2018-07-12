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

</div><br><br>
<p align="center"><h3 align="center">BOOKS AVAILABLE</h3></p>
<div class="a1-row-padding">
	<?php
		include 'connect.php';
		$query="select * from book";
		$result=mysqli_query($conn,$query);
		$count=1;
		while($row=mysqli_fetch_array($result))
		{
			
			echo '<div class="a1-quarter a1-center a1-padding-12"><a href="detail.php?bid='.$row['bid'].'&type=book">
					<br>'.$count.')
					'.$row["bname"].'<br>
					Rs. '.$row["price"].'<br></a>
				  </div>';
				  $count++;
		}
	?>
</div>

</body>
</html>