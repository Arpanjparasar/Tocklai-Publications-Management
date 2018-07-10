<?php 
// session_start();
require('connect.php');

	$q="select * from ebook";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
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
<p align="center"><h3 align="center" style="margin-top:2%">RECORDS OF ALL EBOOKS AVAILABLE</h3></p>

<table border='1'>
	<tr>
		<th>SR.NO</th>
		<th>NAME</th>
		<th>PUBLISHER</th>
		<th>PRICE</th>
		<th>DELETE</th>
	</tr>
	<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
								
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['name'].'
										<td>'.$row['publisher'].'
                                <td>'.$row['price'];
										
										
									echo 	'<td><a href="process_del_ebook.php?id='.$row['eid'].'"><img src="images/drop.png" ></a></td>
											
							
									</tr>';
									$count++;
							}
						?>

</table>

</body>
</html>