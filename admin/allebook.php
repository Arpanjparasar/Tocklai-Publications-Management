<?php 
// session_start();
require('connect.php');


 session_start();
 if(!isset($_SESSION["adminlogin"]))
 {
	 header("location:index.php");
 }

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

<table border='1' align="center">
	<tr>
		<th>SR.NO</th>
		<th>NAME</th>
		<th>AUTHOR/EDITOR/COMPILED BY:</th>
		<th>PUBLISHER</th>
		<th>EDITION</th>
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
										<td>'.$row['author'].'
										<td>'.$row['publisher'].'
										<td>'.$row['edition'].'
                                <td>'.$row['price'];
										
								
									echo 	'<td><form action="process_del_ebook" method="GET"><input type="hidden" name="id" value='.$row['eid'].'><input type="image" src="images/drop.png" onclick="return ConfirmDelete()" ></form></td>		
							
									</tr>';
									$count++;
							}
						?>

</table>

<script>
	
	function ConfirmDelete(){
	
    var r = confirm("Are you sure! You want to Delete this User?");
    if (r == true) {
       return true;
    } else {
        return false;
    }
}

</script>

</body>
</html>