<?php session_start();

	//if(!(isset($_SESSION['status'])))
	//{
		//header("location:../index.php");
	//}
	require('connect.php');
	$q="select * from itemsold order by id desc";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

if(isset($_GET['first']) && isset($_GET['second']) && isset($_GET['type']))
{
    $a=$_GET['first']."  23:59:59";
    $b=$_GET['second'];
    $c=$_GET['type'];
    if($c=="all")
    {
        $q="select * from itemsold where (time between '$a' and '$b') or (time >='$b' and time <='$a') order by id desc";
        $res=mysqli_query($conn,$q) or die($q);
    }
    else
    {
        $q="select * from itemsold where (time between '$a' and '$b') or (time >='$b' and time <='$a') and type='$c' order by id desc";
        $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
    }
	 
}
?>

<html>
<head>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />
<script>
	function change()
	{
		
		var n=document.getElementById('type').value;
		
		if(n=="all")
		{
			document.getElementById('all').style.display="block";
			document.getElementById('book').style.display="none";
			document.getElementById('ebook').style.display="none";
			document.getElementById('cd').style.display="none";
		}
		else if(n=="ebook")
		{
			document.getElementById('all').style.display="none";
			document.getElementById('book').style.display="none";
			document.getElementById('ebook').style.display="block";
			document.getElementById('cd').style.display="none";
		}
		else if(n=="book")
		{
			document.getElementById('all').style.display="none";
			document.getElementById('ebook').style.display="none";
			document.getElementById('book').style.display="block";
			document.getElementById('cd').style.display="none";
		}
		else if(n=="cd")
		{
			document.getElementById('all').style.display="none";
			document.getElementById('book').style.display="none";
			document.getElementById('ebook').style.display="none";
			document.getElementById('cd').style.display="block";
		}
		
	}
	
	function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		//window.location.replace("index.php?query=");
	}
	function myFunction1()
	{
		var to=document.getElementById("to").value;
		var fom=document.getElementById("from").value;
		var n=document.getElementById('type').value;
		if(to=="" || fom=="")
			alert("Please select a range..");
		else
		{
			
		window.location.replace("checkmemo.php?first="+to+"&second="+fom+"&type="+n);
		}
	}
	
</script>
		
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>
 <?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 

</div><br><br><br>


<div id="page">

	<!-- start content -->
	
	<center><select id="type" onchange="change()">
	<option value="all">ALL</option>
	<option value="book">BOOK</option>
	<option value="ebook">EBOOK</option>
	<option value="cd">CD</option>
	</select>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<!--<button onclick="myFunction()">PRINT REPORT</button><br><br>-->

	FROM:<input type="date" name="from" id="from" required>
	TO:<input type="date" name="to" id="to" required>
	<input type="button" class="a1-btn a1-blue" value="SEARCH" onclick="myFunction1()"><br><br>
	
	
	</center>
	
		<div  id="print">
			<h1 class="title"></h1>
			<div width="90%" id="all">
				
					<table border='1' WIDTH='79%' align="center">
						
						<tr>
<td WIDTH='6%' style=""><b><u>SR.NO</u></b></td>
<TD style="" WIDTH='10%'><b><u>MEMBERSHIP</u></b></TD>
<TD style="" WIDTH='7%'><b><u>ITEMS NAME </u></b></TD>
                            <TD style="" WIDTH='6%'><b><u>BOOK,CD,EBOOK</u></b></TD>
							 <TD style="" WIDTH='7%'><b><u>TYPE</u></b></TD>
                          
                            <TD style="" WIDTH='10%'><b><u>QUANTITY</u></b></TD>
                            
                            <TD style="" WIDTH='7%'><b><u>FINAL PRICE</u></b></TD>
                            
<TD style="" WIDTH='8%'><b><u>BUYER NAME</u></b></TD>
<TD style="" WIDTH='9%'><b><u>MOBILE NUMBER</u></b></TD>

<TD style="" WIDTH='8%'><b><u>ORDER TIME</u></b></TD>
<TD style="" WIDTH='12%'><b><u>MEMO</u></b></TD>				
								
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
                                $query = "Select * from orders where orderid='" . $row['id'] . " '";

                                $result=mysqli_query($conn, $query);
                                $row2=mysqli_fetch_assoc($result);
								
								
								
                                $tot=($row['rate']*$row['quantity'])-$row['discount'];
							echo '<tr>
										<td>'.$count.'
										<td>'.$row2['category'].'
										<td>'.$row['name'].'
										<td>'.$row['type'].'
										<td>'.$row2['selltype'].'
										
										<td>'.$row['quantity'].'
										
										<td>'.$row2['total'];


										echo '</td>
										
										<td>'.$row2['name'].'
										<td>'.$row2['mobile'].'
										
										<td>'.$row['time'].'
										<td><a href="memo.php?id='.$row['id'].'"><input type="button" class="a1-btn a1-blue" value="Memo" ></a>';

				
											
									
									echo '</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
			
			<div class="entry" id="ebook" style="display:none;">

                <table border='1' WIDTH='70%' align='center'>

                    <tr>
                        <td WIDTH='10%' style="color:"><b><u>SR.NO</u></b></td>
                        <TD style="" WIDTH='50%'><b><u>MEMBERSHIP</u></b></TD>
                        <TD style="" WIDTH='50%'><b><u>ITEMS NAME </u></b></TD>
						<TD style="" WIDTH='50%'><b><u>TYPE</u></b></TD>
                        <TD style="" WIDTH='50%'><b><u>BOOK,CD,EBOOK</u></b></TD>
                        
                        <TD style="" WIDTH='50%'><b><u>QUANTITY</u></b></TD>
                       
                        <TD style="" WIDTH='25%'><b><u>FINAL PRICE</u></b></TD>
                        
                        <TD style="" WIDTH='20%'><b><u>BUYER NAME</u></b></TD>
                        <TD style="" WIDTH='20%'><b><u>MOBILE NUMBER</u></b></TD>

                        <TD style="" WIDTH='25%'><b><u>ORDER TIME</u></b></TD>
                         <TD style="" WIDTH='25%'><b><u>MEMO</u></b></TD>

                    </tr>
                    <?php
                    $count=1;
                    $query2 = "Select * from itemsold where type='ebook' ORDER BY id DESC";
                    $result2 = mysqli_query($conn, $query2);
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        $query = "Select * from orders where orderid='" . $row['id'] . "'";

                        $result=mysqli_query($conn, $query);
                        $row2=mysqli_fetch_assoc($result);
                        $tot=($row['rate']*$row['quantity'])-$row['discount'];
                        echo '<tr>
										<td>'.$count.'
										<td>'.$row2['category'].'
										<td>'.$row2['selltype'].'
										<td>'.$row['name'].'
										<td>'.$row['type'].'
										
										<td>'.$row['quantity'].'
										
										<td>'.$row2['total'];


                        echo '</td>
										
										<td>'.$row2['name'].'
										<td>'.$row2['mobile'].'
										
										<td>'.$row['time'].'
										<td><a href="memo.php?id='.$row['id'].'"><input type="button" class="a1-btn a1-blue" value="Memo" ></a>';

				
											
									
									echo '</tr>';
                        $count++;
                    }
                    ?>

                </TABLE>
				
			</div>
			
			
			<div class="entry" id="cd" style="display:none;">

                <table border='1' WIDTH='70%' align='center'>

                    <tr>
                        <td WIDTH='10%' style=""><b><u>SR.NO</u></b></td>
                        <TD style="" WIDTH='50%'><b><u>MEMBERSHIP</u></b></TD>
						<TD style="" WIDTH='50%'><b><u>TYPE</u></b></TD>
                        <TD style="" WIDTH='50%'><b><u>ITEMS NAME </u></b></TD>
                        <TD style="" WIDTH='50%'><b><u>BOOK,CD,EBOOK</u></b></TD>
                     
                        <TD style="" WIDTH='50%'><b><u>QUANTITY</u></b></TD>
                      
                        <TD style="" WIDTH='25%'><b><u>FINAL PRICE</u></b></TD>
                        
                        <TD style="" WIDTH='20%'><b><u>BUYER NAME</u></b></TD>
                        <TD style="" WIDTH='20%'><b><u>MOBILE NUMBER</u></b></TD>

                        <TD style="" WIDTH='25%'><b><u>ORDER TIME</u></b></TD>
                        <TD style="" WIDTH='25%'><b><u>MEMO</u></b></TD>

                    </tr>
                    <?php
                    $count=1;
                    $query2 = "Select * from itemsold where type='cd' ORDER BY id DESC";
                    $result2 = mysqli_query($conn, $query2);
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        $query = "Select * from orders where orderid='" . $row['id'] . "'";

                        $result=mysqli_query($conn, $query);
                        $row2=mysqli_fetch_assoc($result);
                        $tot=($row['rate']*$row['quantity'])-$row['discount'];
                        echo '<tr>
										<td>'.$count.'
										<td>'.$row2['category'].'
										<td>'.$row2['selltype'].'
										<td>'.$row['name'].'
										<td>'.$row['type'].'
										
										<td>'.$row['quantity'].'
										
										<td>'.$row2['total'];


                        echo '</td>
										
										<td>'.$row2['name'].'
										<td>'.$row2['mobile'].'
										
										<td>'.$row['time'].'
										<td><a href="memo.php?id='.$row['id'].'"><input type="button" class="a1-btn a1-blue" value="Memo" ></a>';

				
											
									
									echo '</tr>';
                        $count++;
                    }
                    ?>

                </TABLE>
			</div>
			
			<div class="entry" id="book" style="display:none;">

                <table border='1' WIDTH='70%' align="center">

                    <tr>
                        <td WIDTH='10%' style=""><b><u>SR.NO</u></b></td>
                        <TD style="" WIDTH='50%'><b><u>MEMBERSHIP</u></b></TD>
                        <TD style="" WIDTH='50%'><b><u>ITEMS NAME </u></b></TD>
						<TD style="" WIDTH='50%'><b><u>TYPE</u></b></TD>
                        <TD style="" WIDTH='50%'><b><u>BOOK,CD,EBOOK</u></b></TD>
                       
                        <TD style="" WIDTH='50%'><b><u>QUANTITY</u></b></TD>
                      
                        <TD style="" WIDTH='25%'><b><u>FINAL PRICE</u></b></TD>
                        
                        <TD style="" WIDTH='20%'><b><u>BUYER NAME</u></b></TD>
                        <TD style="" WIDTH='20%'><b><u>MOBILE NUMBER</u></b></TD>

                        <TD style="" WIDTH='25%'><b><u>ORDER TIME</u></b></TD>
                         <TD style="" WIDTH='25%'><b><u>MEMO</u></b></TD>

                    </tr>
                    <?php
                    $count=1;
                    $query2 = "Select * from itemsold where type='book' ORDER BY id DESC";
                    $result2 = mysqli_query($conn, $query2);
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        $query = "Select * from orders where orderid='" . $row['id'] . "'";

                        $result=mysqli_query($conn, $query);
                        $row2=mysqli_fetch_assoc($result);
                        $tot=($row['rate']*$row['quantity'])-$row['discount'];
                        echo '<tr>
										<td>'.$count.'
										<td>'.$row2['category'].'
										<td>'.$row['name'].'
										<td>'.$row2['selltype'].'
										<td>'.$row['type'].'
										
										<td>'.$row['quantity'].'
										
										<td>'.$row2['total'];


                        echo '</td>
										
										<td>'.$row2['name'].'
										<td>'.$row2['mobile'].'
										
										<td>'.$row['time'].'
										<td><a href="memo.php?id='.$row['id'].'"><input type="button" class="a1-btn a1-blue" value="Memo" ></a>';

				
											
									
									echo '</tr>';



                        echo '</tr>';
                        $count++;
                    }
                    ?>

                </TABLE>
				
			</div>
			
		</div>
		

	


<!-- start footer -->
<div id="footer">
	<?php include('footer.php'); ?>		
</div>
<!-- end footer -->
</body>
</html>