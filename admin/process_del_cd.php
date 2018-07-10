<?php
require('connect.php');

			$query="delete from cd where cid =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");

			header("location:allcd.php");

?>