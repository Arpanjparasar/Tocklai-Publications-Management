<?php
require('connect.php');
session_start();

	if(isset($_POST["submit"]))
		 
	{
		
		$usernm=$_POST["usernm"];
		$pass=$_POST["pass"];
		
		$sql="select * from user where uname='$usernm' and password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {

			$_SESSION['adminlogin']=$usernm;					
			header("location:admin.php");
			
		}
		else{
			$message = "User name and Password in incorrect!";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='index.php';</script>";
		}
		
		
    }

?>
