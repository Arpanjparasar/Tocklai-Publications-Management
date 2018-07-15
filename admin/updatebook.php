<?php 
// session_start();
require('connect.php');
	$id=$_GET['id'];
	$q="select * from book where bid=$id";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
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


<style>

</style>
</head>

<body>
 <?php include('menu.php'); ?>
 <div id="banner">
		<img src="images/banner.jpg" width="100%" height="170"  alt=""/> 
</div>

 <div class="a1-container a1-small a1-padding-32" style="margin-top:3%; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>EDIT BOOK</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="saveupdatedb.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">BOOK NAME:</td>
           	   <td height="35"><input type='text' name="name" value="<?php echo $row['bname']?>" size="30"></td>
         	   </tr>
			   
			   <tr>
               <td height="35">AUTHOR</td>
               <td height="35"><input type='text' name="author" value="<?php echo $row['author']?>" size="30" required/></td></td>
             </tr>
             <tr>
               <td height="35">DESCRIPTION</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="desc" id="textarea"   type='text' style="margin: 0px; width: 252px; height: 42px;resize:none;"><?php echo $row['des']?></textarea></td></td>
             </tr>
             <tr>
               <td height="35">PUBLISHER:</td>
               <td height="35"><input type='text' value="<?php echo $row['publisher']?>" name="publisher"  size="30" required/></td></td>
             </tr>
             <tr>
               <td height="35">EDITION:</td>
               <td height="35"><input type='text' name="edition" value="<?php echo $row['edition']?>"  size="30" required/></td></td>
             </tr>
            <tr>
               <td height="35">ISBN:</td>
               <td height="35"><input type='text' name="isbn" value="<?php echo $row['isbn']?>" size="30" required/><td></td>
             </tr>
              <tr>
               <td height="35">PRICE:</td>
               <td height="35"><input name="price" value="<?php echo $row['price']?>" size="30" required/></td></td>
             </tr>
			 <tr>
               <td height="35">COPIES:</td>
               <td height="35"><input name="copies" value="<?php echo $row['copies']?>"  size="30" required/></td></td>
             </tr>
			 <input type="hidden" name="id" value="<?php echo $id ?>" />
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="UPDATE BOOK" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   



</body>
<br><br>
<?php include'footer.php' ?>
</html>