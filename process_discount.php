<?php
require('connect.php');

$query="update cart set discount=".$_GET['discount']." where id =".$_GET['id'];

mysqli_query($conn,$query) or die("can't Execute...");


header("location:viewcart.php");

?>
