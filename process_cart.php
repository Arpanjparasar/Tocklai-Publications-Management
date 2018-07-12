<?php session_start();
require('connect.php');
	$name=$_GET['nm'];
    $price=$_GET['rate'];
    $type=$_GET['type'];
    $id=$_GET['id'];

$user='hello';
$query="insert into cart(`itemid`,`user`,`name`,`type`,`quantity`,`rate`,`discount`) values('$id','$user','$name','$type','1','$price','0')";

if(mysqli_query($conn,$query))
    header("location: viewcart.php");
else
    echo mysqli_error($conn);


?>