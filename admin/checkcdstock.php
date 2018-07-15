<?php 
// session_start();
require('connect.php');
session_start();
 if(!isset($_SESSION["adminlogin"]))
 {
	 header("location:index.php");
 }

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

   <script>function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
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
<input type="button" class="a1-btn a1-blue" style="margin-left:45%; margin-top:4%;" value="PRINT REPORT" onclick="myFunction()"><br><br>
<div class="post" id="print">
<p align="center"><h3 align="center" style="margin-top:2%">RECORDS OF ALL CDS AVAILABLE</h3></p>



<table border='1' align="center">
	<tr>
		<th>SR.NO</th>
		<th>NAME</th>
		<th>AUTHOR/EDITOR/COMPILED BY</th>
		<th>PUBLISHER</th>
		<th>ISBN</th>
		<th>COPIES LEFT</th>
		<th>PRICE</th>
	</tr>
	<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'</td>
										<td>'.$row['name'].'</td>
										<td>'.$row['author'].'</td>
										<td>'.$row['publisher'].'</td>
										<td>'.$row['isbn'].'</td>
										<td>'.$row['copies'].'</td>
										<td>'.$row['price'].'</td></tr>';

									$count++;
							}
						?>

</table>
</div>
<br><br>
<?php include'footer.php' ?>
</body>
</html>