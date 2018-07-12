<?php
require('connect.php');

$type=$_GET['type'];
$itemid=$_GET['itid'];
$sql="";
if($type=="ebook")
    $sql="select * from ebook where eid=".$itemid;
else if($type=='book')
    $sql="select * from book where bid=".$itemid;
else if($type=="cd")
    $sql="select * from cd where cid=".$itemid;


$result=mysqli_query($conn,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    if($_GET['quantity']<=$row['copies']){
      $query="update cart set quantity=".$_GET['quantity']." where id =".$_GET['id'];
      mysqli_query($conn,$query) or die("can't Execute...");
      header("location:viewcart.php");
    }
    else{
        $message = "Quantity left = ".$row['copies'];
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='viewcart.php';</script>";
    
    }
}

?>
