<?php

 session_start();
 if(!isset($_SESSION["userlogin"]))
 {
	 header("location:index.php");
 }
 

 
require('connect.php'); 	
	//echo $uid;
	$total=$_POST['tot'];

?>


<html>
<head>
<meta charset="utf-8">
<title>TRA</title>
<link href="a1style.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index_files/mbcsmbmcp.css" type="text/css" />

</head>

<body>
<?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 

</div><br><br>

            
		
   

<div class="a1-container a1-small a1-padding-32" style="margin-top:3%; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>ORDER CONFIRMATION</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="checkout_db.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">CUSTOMER/TRASFERER NAME:</td>
           	   <td height="35"><input name="name" placeholder="ENTER NAME" required="" tabindex="1" type="text" size="30" required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">MEBERSHIP TYPE:</td>
               <td height="35"><input id="category" name="category" required="" tabindex="1" type="radio" value="Member"> Member  &nbsp;&nbsp;&nbsp;
				 <input id="category" name="category" required="" tabindex="1" type="radio" value="Non-Member"> Non Member  </td></td>
             </tr>
             <tr>
               <td height="35">TYPE:</td>
               <td height="35"><input id="type" name="type" required="" tabindex="1" type="radio" value="Sell" checked onclick="myfunc(1)"> Sell  &nbsp;&nbsp;&nbsp;
				 <input id="type" name="type" required="" tabindex="1" type="radio" value="Transfer" onclick="myfunc(2)"> Transfer  </td></td>
             </tr>
             <tr>
               <td height="35">ADDRESS:</td>
               <td height="35"><textarea id="address" name="address" style="margin: 0px; width: 252px; height: 42px;resize:none;" placeholder="Address" required="" cols="45" row="10"type="email"> </textarea></td></td>
             </tr>
             <tr>
               <td height="35">CONTACT NO:</td>
               <td height="35"> <input id="phone" name="phone" required="" size="30" type="text"></td></td>
             </tr>
            <tr>
               <td height="35">TOTAL:</td>
               <td height="35"><input id="total" name="total" size="30" value="<?php echo $total; ?>" readonly tabindex="1" type="text"> <td></td>
             </tr>
        
            <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="CONFIRM AND PROCEED" >
                 </td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   



<script>

 var tot=document.getElementById('total');
 var total=tot.value;
  function myfunc(n){
   if(n==1)
    	tot.value=total;
   else if(n==2)
		tot.value=0;
  }
</script>
<br><br>
<?php include'footer.php' ?>
</body>
</html>
