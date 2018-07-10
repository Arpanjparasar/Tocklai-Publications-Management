<?php
require('connect.php');

			$query="delete from book where bid =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			

			header("location:allbook.php");

?>