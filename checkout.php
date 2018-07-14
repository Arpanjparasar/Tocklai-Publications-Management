<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
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

            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div>
		
      <div  class="form">
    		<form id="contactform" method="post" action="checkout_db.php"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
				 <p class="contact"><label for="name">Category</label></p> 
    			 <input id="category" name="category" required="" tabindex="1" type="radio" value="Member"> Member  &nbsp;&nbsp;&nbsp;
				 <input id="category" name="category" required="" tabindex="1" type="radio" value="Non-Member"> Non Member  
    			 

				  <p class="contact"><label for="name">Type</label></p> 
    			 <input id="type" name="type" required="" tabindex="1" type="radio" value="Sell" checked onclick="myfunc(1)"> Sell  &nbsp;&nbsp;&nbsp;
				 <input id="type" name="type" required="" tabindex="1" type="radio" value="Transfer" onclick="myfunc(2)"> Transfer  


    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="45" row="10"type="email"> </textarea>
                

            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" required="" type="text"> <br>
			<p class="contact"><label for="name">Total</label></p> 
    			<input id="total" name="total" value="<?php echo $total; ?>" readonly tabindex="1" type="text"> 



				
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
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

</body>
</html>