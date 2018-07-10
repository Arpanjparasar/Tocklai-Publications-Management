<?php
require('connect.php');

			$query="delete from ebook where eid =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");

			header("location:allebook.php");

?>