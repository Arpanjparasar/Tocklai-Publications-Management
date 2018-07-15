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

<script>
		function addBook(book)
		{
			var n=prompt("Enter the number of copies of that need to be added.");
                if(!n=="")
                    window.location.replace("process_add_copies.php?name="+n+"&book="+book);
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
<p align="center"><h3 align="center" style="margin-top:2%">RECORDS OF ALL BOOKS AVAILABLE</h3></p> 

<table border='1' align="center">
	<tr>
		<th>SR.NO</th>
		<th>NAME</th>
		<th>AUTHOR/EDITOR/COMPILED BY</th>
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
										<td>'.$count.'</td>
										<td>'.$row['bname'].'</td>
										<td>'.$row['author'].'</td>
										<td>'.$row['publisher'].'</td>
										<td>'.$row['isbn'].'</td>
										<td>'.$row['copies'].'</td>
										<td>'.$row['price'].'</td>';

										
										
									echo 	'<td><form action="process_del_book" method="GET"><input type="hidden" name="id" value='.$row['bid'].'><input type="image" src="images/drop.png" onclick="return ConfirmDelete()" ></form></td>
									
									<td><button onclick="addBook('.$row['bid'].')"><img src="images/ADD.png" ></button></td>
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
<br><br>
<?php include'footer.php' ?>
</body>
</html>