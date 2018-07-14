<?php
 session_start();
//  $user=$_SESSION['unm'];
$user="hello";
require('connect.php');
			$name=$_POST['name'];
			$address=$_POST['address'];

			$phone=$_POST['phone'];
			$total=$_POST['total'];

            $category=$_POST['category'];
            
            date_default_timezone_set('Asia/Kolkata');
            $odate=date("Y-m-d h:i:s");

$query5="insert into orders(sellername,name,category,address,mobile,total,orderdate) values('$user','$name','$category','$address','$phone','$total','$odate')";
    mysqli_query($conn,$query5) or die("can't Execute... query5");

    $query2="select * from cart where user='".$user."'";
    $res2=mysqli_query($conn,$query2) or die("can't Execute... res2");

    $query8="select MAX(orderid) AS max from orders";
    $res8=mysqli_query($conn,$query8) or die("can't Execute... res8");

    $row8=mysqli_fetch_array($res8);

    while($row=mysqli_fetch_assoc($res2)) {
        $query = "insert into itemsold(id,itemid,user,name,type,quantity,rate,discount,time) values('" . $row8['max'] . "','" . $row['itemid'] . "','" . $row['user'] . "','" . $row['name'] . "','" . $row['type'] . "','" . $row['quantity'] . "','" . $row['rate'] . "','" . $row['discount'] . "','$odate')";

        if ($row['type'] != "ebook") {
            if($row['type']=='cd'){
                $idd="cid";
            }
            else{
                $idd="bid";
            }
                $query1 = "select copies from ".$row['type']." where ".$idd."='" . $row['itemid'] . "'";
    
            $res = mysqli_query($conn, $query1) or die("could not Execute...");
            $row2=mysqli_fetch_assoc($res);

            $n=$row2['copies']-$row['quantity'];
            $query4="update " . $row['type'] . " set copies=".$n." where ".$idd."=".$row['itemid']."";
           mysqli_query($conn,$query4) or die("cannot Execute...");
        }
        mysqli_query($conn,$query) or die("can't Execute...");
    }
$query6="delete from cart where user='".$user."'";

if(mysqli_query($conn,$query6)){
    $message = "SELL SUCCESSFUL.☺";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='userhome.php';</script>";
} 
else{
    $message = "SELL NOT SUCCESSFUL.";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='userhome.php';</script>";
}




?>