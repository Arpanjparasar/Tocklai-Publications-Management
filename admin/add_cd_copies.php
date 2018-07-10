<?php
require('connect.php');
		$query1="select copies from cd where cid =".$_GET['book'];
		$res=mysqli_query($conn,$query1) or die("can't Execute...");
		$row=mysqli_fetch_assoc($res);
		$n=$row['copies']+$_GET['name'];
		$query="update cd set copies=".$n." where cid =".$_GET['book'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:allcd.php");

?>
