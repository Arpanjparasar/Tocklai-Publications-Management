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
			
			
			
		$query="update ebook set name='".$name."',author='".$auth."',des='".$desc."',publisher='".$publisher."',edition='".$edition."',isbn='".$isbn."',price=".$price." where eid='".$id."'";
	   //echo $query;
		$result=mysqli_query($conn,$query);
		if($result){	
		
			echo "<head><script>alert('BOOK UPDATED');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=allebook.php'>";
		}else{
			echo "<head><script>alert('BOOK NOT UPDATED');</script></head></html>";
			echo mysqli_error($conn);
		}
	
?>
	
	