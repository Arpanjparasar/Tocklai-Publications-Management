<?php 
// session_start();
require('connect.php');

 session_start();
 if(!isset($_SESSION["adminlogin"]))
 {
	 header("location:index.php");
 }
 

	$q="select * from book";
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
 
<p align="center"><h3 align="center" style="margin-top:2%">EDIT BOOKS</h3></p> 

<table border='1' align="center">
	<tr>
		<th>SR.NO</th>
		<th>NAME</th>
		<th>AUTHOR/EDITOR/COMPILED BY</th>
		<th>PUBLISHER</th>
		<th>ISBN NO</th>
		<th>COPIES LEFT</th>
		<th>PRICE</th>
		<th>ACTION</th>
		
	</tr>
	<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'</td>
										<td>'.$row['bname'].'</td>
										<td>'.$row['author'].'</td>
										<td>'.$row['publisher'].'</td>
										<td>'.$row['isbn'].'</td>
										<td>'.$row['copies'].'</td>
										<td>'.$row['price'].'</td>';

										
										
									echo 	'<td><a href="updatebook.php?id='.$row['bid'].'"><input class="a1-btn a1-blue" type="button" name="" id="" value="EDIT" ></a></td>
												
									
									</tr>';
									$count++;
							}
						?>

</table>
<br><br>
<?php include'footer.php' ?>
</body>
</html>