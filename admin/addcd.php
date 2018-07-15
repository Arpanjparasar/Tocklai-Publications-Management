<?php
 session_start();
 if(!isset($_SESSION["adminlogin"]))
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
        	<h6>ADD NEW CD</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="savecd.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">CD NAME:</td>
           	   <td height="35"><input name="name"  size="30" required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">AUTHOR</td>
               <td height="35"><input name="author"  size="30" required/></td></td>
             </tr>
             <tr>
               <td height="35">DESCRIPTION</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="desc" id="textarea" style="margin: 0px; width: 252px; height: 42px;resize:none;"></textarea></td></td>
             </tr>
             <tr>
               <td height="35">PUBLISHER:</td>
               <td height="35"><input name="publisher"  size="30" required/></td></td>
             </tr>
             <tr>
               <td height="35">EDITION:</td>
               <td height="35"><input name="edition"  size="30" required/></td></td>
             </tr>
            <tr>
               <td height="35">ISBN:</td>
               <td height="35"><input name="isbn"  size="30" required/><td></td>
             </tr>
             <tr>
               <td height="35">PRICE:</td>
               <td height="35"><input name="price"  size="30" required/></td></td>
             </tr>
			 <tr>
               <td height="35">COPIES:</td>
               <td height="35"><input name="copies"  size="30" required/></td></td>
             </tr>
			 
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Add CD" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   


<br><br>
<?php include'footer.php' ?>
</body>
</html>