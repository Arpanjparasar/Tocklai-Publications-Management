<?php
require('connect.php');

	

		
			$name=$_POST['name'];
			$auth=$_POST['author'];
			$desc=$_POST['desc'];
			$publisher=$_POST['publisher'];
			$edition=$_POST['edition'];
			$isbn=$_POST['isbn'];
			$price=$_POST['price'];
			
			
			
		$query="INSERT INTO ebook values(null,'$name','$auth','$desc','$publisher','$edition','$isbn',$price)";
	
		$result=mysqli_query($conn,$query);
		if($result){	
		
			echo "<head><script>alert('EBOOK ADDED');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=allebook.php'>";
		}else{
			echo "<head><script>alert('EBOOK NOT ADDED');</script></head></html>";
			echo mysqli_error($conn);
		}
	
	
?>
	
	