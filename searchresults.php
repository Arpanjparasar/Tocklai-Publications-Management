<?php
require('connect.php');
 //session_start();
	
	
	
	$search=$_GET['s'];
	$query="select * from book where bname like '%$search%'";
	$query1="select * from cd where name like '%$search%'";
	$query2="select * from ebook where name like '%$search%'";
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	$res1=mysqli_query($conn,$query1) or die("Can't Execute Query...");
	$res2=mysqli_query($conn,$query2) or die("Can't Execute Query...");

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

</div><br><br><br>

	<div class="entry">
										
										
											<?php
												$count=0;
												echo '<table border="1" width="70%" align="center" ><tr><h3 align="center">BOOKS:</h3></tr>';
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?bid='.$row['bid'].'">
														
														<br>'.$row['bname'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
												$count=0;
												echo '</tr></table><table border="1" width="70%" align="center" ><tr><h3 align="center">CDs:</h3></tr>';
												while($row=mysqli_fetch_assoc($res1))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?cid='.$row['cid'].'">
													
														<br>'.$row['name'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
												$count=0;
												echo '</tr></table><table border="1" width="70%" align="center"><tr><h3 align="center">EBOOKS:</h3></tr>';
												while($row=mysqli_fetch_assoc($res2))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?eid='.$row['eid'].'">
													
														<br>'.$row['name'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>		


<br><br>
<?php include'footer.php' ?>
</body>
</html>