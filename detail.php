<?php
session_start();
if(!isset($_SESSION["userlogin"]))
{
	header("location:index.php");
}

?>
<?php //session_start();
	require('connect.php');
	if(isset($_GET['eid']))
	{
		$id=$_GET['eid'];
		$q="select * from ebook where eid=$id";
	}
	else if(isset($_GET['bid']))
	{
		$id=$_GET['bid'];
		$q="select * from book where bid=$id";
	}
	else
	{
		$id=$_GET['cid'];
	$q="select * from cd where cid=$id";
	}
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<html>
<head>
<meta charset="utf-8">
<title>TRA</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />

<style>

</style>
</head>

<body>
 <?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 

</div><br><br>

<?php if(isset($_GET['eid']))
	{
		?>


					<h4 class="title" align="center"><?php echo $row['name'];?></h4>
									<div class="entry">
										<?php

											echo '	<table border="0" width="60%" align="center">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="60%" align="center" >
											
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['name'].'</td>
															</tr>

															<tr>
																<td align="right">Author/Editor/Compiled BY</td>
																<td>: </td>
																<td align="left">'.$row['author'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['edition'].'</td>
																
															</tr>
															
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
											
											<table border="0" width="60%" align="center">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 <table border="0" width="60%" align="center">
											<td> '.$row['des'].' </td>
												</table>								

											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="60%" align="center">
												
												 <tr align="center" bgcolor="#EEE9F3">';

													echo ' <td><a href="process_cart.php?rate='.$row['price'].'&id='.$row['eid'].'&nm='.$row['name'].'&type=ebook">
														<input type="button" class="a1-btn a1-blue" value="ADD TO CART">
													</a></td>';
											
												echo '</tr>
											</table>';
										?>
									</div>


<?php

	}else if(isset($_GET['bid']))
	{
	?>
									<h4 class="title" align="center"><?php echo $row['bname'];?></h4>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="60%" align="center">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="60%" align="center">
												
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['bname'].'</td>
															</tr>
															<tr>
																<td align="right">Author/Editor/Compiled BY</td>
																<td>: </td>
																<td align="left">'.$row['author'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">Copies Left</td>
																<td>: </td>
																<td align="left">'.$row['copies'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['edition'].'</td>
																
															</tr>
															
														
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="60%" align="center">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											
											 </table>
											<table border="0" width="60%" align="center">
											<td> '.$row['des'].' </td>
												</table>								
												
											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="60%" align="center">
												
												 <tr align="center" bgcolor="#EEE9F3">';
											 if(isset($_GET['bid']))
												{
										
                                                     echo ' <td><a href="process_cart.php?rate='.$row['price'].'&id='.$row['bid'].'&nm='.$row['bname'].'&type=book">
														<input type="button" class="a1-btn a1-blue" value="ADD TO CART">
													</a></td>';
                                          
												}
												
												echo '</tr>
											</table>';
										?>
									</div>
				<?php
	}
	
	
	else 
	{
	?>
									<h4 class="title" align="center"><?php echo $row['name'];?></h4>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="60%" align="center">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="60%" align="center">
												
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['name'].'</td>
															</tr>

															<tr>
																<td align="right">Author/Editor/Compiled BY</td>
																<td>: </td>
																<td align="left">'.$row['author'].'</td>
																
															</tr>
															<tr>
																<td align="right">Copies Left</td>
																<td>: </td>
																<td align="left">'.$row['copies'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['edition'].'</td>
																
															</tr>
															
														
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="60%" align="center">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 <table border="0" width="60%" align="center">
											 
										<td>	 '.$row['des'].'  </td>
																				
											</table>
											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="60%" align="center">
												
												 <tr align="center" bgcolor="#EEE9F3">';
											 if(isset($_GET['cid']))
												{
									
                                                     echo ' <td><a href="process_cart.php?rate='.$row['price'].'&id='.$row['cid'].'&nm='.$row['name'].'&type=cd">
														<input type="button" class="a1-btn a1-blue" value="ADD TO CART">
													</a></td>';
                                                 }
                        
												
												echo '</tr>
											</table>';
										?>
									</div>
				<?php
	}
	?>
	
									
<br><br>
<?php include'footer.php' ?>

</body>
</html>