<?php 
// session_start();
require('connect.php');

	$q="select * from cd";
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

<script>
		function addBook(book)
		{
			var n=prompt("Enter the number of copies of that need to be added.");
                if(!n=="")
                    window.location.replace("add_cd_copies.php?name="+n+"&book="+book);
		}
</script>
<style>

</style>
</head>

<body>
 <?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 

</div>

<p align="center"><h3 align="center" style="margin-top:2%">RECORDS OF ALL CDS AVAILABLE</h3></p>

<table border='1' align="center">
	<tr>
		<th>SR.NO</th>
		<th>NAME</th>
		<th>AUTHOR/EDITOR/COMPILED BY:</th>
		<th>PUBLISHER</th>
		<th>ISBN NO</th>
		<th>COPIES LEFT</th>
		<th>PRICE</th>
		<th>DELETE</th>
		<th>ADD COPIES</th>
	</tr>
	<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['name'].'
										<td>'.$row['author'].'
										<td>'.$row['publisher'].'
										<td>'.$row['isbn'].'
										<td>'.$row['copies'].'
										<td>'.$row['price'];

										
										
									echo 	'<td><a href="process_del_cd.php?id='.$row['cid'].'"><img src="images/drop.png" ></a></td>
												
									<td><button onclick="addBook('.$row['cid'].')"><img src="images/ADD.png" ></button></td>
									</tr>';
									$count++;
							}
						?>

</table>

</body>
</html>