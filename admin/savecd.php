<?php
require('connect.php');

	

		
			$name=$_POST['name'];
			$auth=$_POST['author'];
			$desc=$_POST['desc'];
			$publisher=$_POST['publisher'];
			$edition=$_POST['edition'];
			$isbn=$_POST['isbn'];
			$price=$_POST['price'];
			$copies=$_POST['copies'];
			
			$query="insert into cd(name,author,des,edition,publisher,isbn,price,copies)
			values('$name','$auth','$desc','$edition','$publisher','$isbn',$price,$copies)";`
			
			
	//	$query="INSERT INTO cd values(null,'$name','$auth','$desc','$edition','$publisher','$isbn',$price,$copies)";
	
		$result=mysqli_query($conn,$query);
		if($result){	
		
			echo "<head><script>alert('CD ADDED');</script></head></html>";
			echo "<meta http-equiv='refresh' content='0; url=allcd.php'>";
		}else{
			echo "<head><script>alert('CD NOT ADDED');</script></head></html>";
			echo mysqli_error($conn);
		}
	
	
?>
	
	