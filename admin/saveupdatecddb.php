<?php
require('connect.php');

	
			
			$id=$_POST['id'];
			$name=$_POST['name'];
			$auth=$_POST['author'];
			$desc=$_POST['desc'];
			$publisher=$_POST['publisher'];
			$edition=$_POST['edition'];
			$isbn=$_POST['isbn'];
			$price=$_POST['price'];
			$copies=$_POST['copies'];
			
			
		$query="update cd set name='".$name."',author='".$auth."',des='".$desc."',publisher='".$publisher."',edition='".$edition."',isbn='".$isbn."',price=".$price.",copies=".$copies." where cid='".$id."'";
	   //echo $query;
		$result=mysqli_query($conn,$query);
		if($result){	
		
			echo "<head><script>alert('CD UPDATED');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=allcd.php'>";
		}else{
			echo "<head><script>alert('CD NOT UPDATED');</script></head></html>";
			echo mysqli_error($conn);
		}
	
?>
	
	