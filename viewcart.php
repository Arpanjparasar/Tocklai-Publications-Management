<?php
require('connect.php');
?>
<?php
session_start();
if(!isset($_SESSION["userlogin"]))
{
	header("location:index.php");
}

?>


<html>
<head>
<meta charset="utf-8">
<title>TRA</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
    <script>
    function addQuantity(i,n,t,itid) {
        if (n) {
            window.location.replace("process_add_quantity.php?quantity=" + n + "&id=" + i+"&type="+t+"&itid="+itid);
        }
        else
            window.location.replace("viewcart.php");
    }
    function processDiscount(i,n)
    {
        if(n)
        window.location.replace("process_discount.php?discount="+n+"&id="+i);
        else
            window.location.replace("viewcart.php");
    }

    </script>
    <style>
        a:hover {
            cursor: pointer;
        }
        td {
            padding-right: 20px;
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
			<!-- start header -->
			<body>
 <?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 

</div><br><br>
<!-- end header -->
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title" align="center">Viewcart</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="checkout.php" method="POST">
							<table width="70%" border="0" align="center">
								<tr >
                                    <td> <b>No</b></td>
									<td> <b>Product</b></td>
									<td> <b>Type</b></td>
									<td> <b>Price</b></td>
									<td> <b>Quantity</b></td>

                                    <td> <b>Discount</b></td>
                                    <td> <b>Total</b></td>
                                    <td> <b>Delete</b></td>

								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
                                $query1="select * from cart";
                                $res=mysqli_query($conn,$query1) or die("can't Execute...");
                                $count=1;
                                $tot=0;
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $price=($row['rate']*$row['quantity'])-$row['discount'];

                                    echo '<tr>
										<td>'.$count.'</td>
										<td>'.$row['name'].'</td>
										<td>'.$row['type'].'</td>
										<td>'.$row['rate'].'</td>';
									  if($row['type']=="ebook")
									    echo '<td><input type="text" readonly style="width:40px;" name="quantity" value="NA"></td>';
									  else
									    echo '<td><input type="number" style="width:40px;" onchange="addQuantity('.$row['id'].',this.value,\''.$row['type'].'\','.$row['itemid'].')" name="quantity" value="'.$row['quantity'].'"></td>';
									echo '<td><input type="number" style="width:40px;" onchange="processDiscount('.$row['id'].',this.value)" name="discount" value="'.$row['discount'].'"></td>';
                                    echo 	'<td>'.$price.'</td>
<td><a href="process_del_quantity.php?id='.$row['id'].'"><img src="images/drop.png" ></a></td>
												
									
										
										
										</tr>';
                                        $tot=$tot+$price;
                                    $count++;
                                }
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Final Total:</h4>
							<input type="hidden" name="tot" value="<?php echo $tot; ?>">
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="10"><hr style="border:1px Solid #a1a1a1;">
                                    <input type="submit" class="a1-btn a1-blue" value="PROCEED TO CHECKOUT"></td></tr>
							
							<Br>
								</table>						

								<br><br>

							</form>
							</div>
							
						</div>
						
					</div>
				
				<div style="clear: both;">&nbsp;</div>
			</div>
		<br><br>
<?php include'footer.php' ?>		
</body>
</html>
