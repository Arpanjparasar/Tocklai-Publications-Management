<?php
require('connect.php');

$query="delete from cart where id =".$_GET['id'];

mysqli_query($conn,$query) or die("can't Execute...");


header("location:viewcart.php");

?>