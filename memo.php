<?php session_start();

	
	
	 

?>
<!doctype html>
<html>
<head>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
<meta charset="utf-8">
<title>TRA</title>
<style> #space
{
line-height:0.5cm;
}
</style>
        <script>function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
	}
		</script>
</head>

<body>
<?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 

</div><br><br><br>
<br><input type="button" class="a1-btn a1-blue" value="PRINT REPORT" onclick="myFunction()">
 <div id=print>
					
	<?php
							
						require('connect.php');
	
					$id=$_GET['id'];
					$sql= "Select * from orders o INNER JOIN itemsold i ON o.orderid=i.id Where i.id=$id";
					$res=mysqli_query($conn, $sql);
					 $num=mysqli_num_rows($res);
						for($x=1; $x<=$num;$x++)
						{
							$row=mysqli_fetch_array($res);
						}
		?>
							
<table id =space width="760" height="645" border="1" align="center">
  <tr>
    <td width="290" height="145">Gram: Sciencita      Phone: 0376-2360475      email: director@tocklai.net      web: www.tocklai.net</td>
    <td width="493"><p><img src="LOGO-TRA_400x400.jpg"  alt="" width="43" height="43" align="top"/> 
      <strong>DELIVERY NOTE</strong>    </p>
      <p><strong>Tea Research Association</strong>      <strong>Tocklai Tea Reasearch Institute</strong>      <strong>Jorhat- 785008, Assam</strong></p></td>
    <td width="458">No: <?php echo $row['id']; ?>      Date: <?php echo $row['orderdate']; ?></td>
  </tr>
  
  <tr>
    <td height="56" colspan="2">Delivered to: <?php echo $row['name']; ?> &ensp; Address: <?php echo $row['address']; ?> <br> Contact No: <?php echo $row['mobile']; ?> </td>
    <td>Date: <?php echo $row['orderdate']; ?>      Mode of Delivery: Byhand/regd. Post</td>
    
  </tr>
  
  <tr>
    <td height="41">Item No:</td>
    <td height="41">Quantity and Description</td>
    <td>Amount</td>
  </tr>
   
  <tr>
    <td height="192">1.</td>
    <td height="192"><?php echo $row['quantity']." &ensp;&ensp;   ".$row['name']; ?>      </td>
    <td><?php echo $row['total']; ?>      </td>
  </tr>
  
  <tr>
    <td height="82" colspan="2"><p><strong>Received the above in good condition</strong></p>
      <p>&nbsp;</p>
      <p>      <strong></strong>
      <em>Signature of the buyer/buyers representative </em></p></td>
    <td><p><strong>To be billed/Not to be billed</strong></p>
      <p>&nbsp;</p>
      <p>    Signature of the Officer incharge
        
      </p></td>
  </tr>
</table>

</div>
</body>
</html>