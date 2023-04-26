<!DOCTYPE>
<?php
include ("functions/functions.php");


?>
<html>
 <head>
   <title> Online Shop </title>
   
   <link rel="stylesheet" href="styles/style.css" media="all"/>
   
   </head>
   
   <body>
   
   <div class="main_warpper">
   
         <div class="header_wrapper"> 
		  <img id="logo1" src="images/logo1.jpg"/>
		 <img id="logo" src="images/l21.gif"/>
		 <img id="banner"  src="images/ecb2.jpg"/>

		 

         </div>
		
	 <div class="menubar">

			<ul id="menu">
			   <li><a href="#">Home</a></li>
			   <li><a href="#">Products</a></li>
			   <li><a href="myaccount.php">MyAccount</a></li>
			   <li><a href="#">Sign Up</a></li>
			   <li><a href="#">Shopping Cart</a></li>
			   <li><a href="#">Contact Us</a></li>
			
			<div id="form">  
			 <form method="get" action="results.php" enctype="multipart/form-data">
			  <input type="text" name="user_query" placeholder ="search a product"/>
			  <input type="submit" name="search" value="Search"/>
			  </form>
			
			</div>
			
			</ul>

			

	 </div>
  

	<div class="content_wrapper">
	
	  <div id="sidebar">
      <div id="sidebar_title"> Categories </div>
	  
		<ul id="cats">
		
		 <?php getCats(); ?> 
		
		<ul>
		
		
        <div id="sidebar_title"> Brands </div>
		<ul id="cats">
		<?php getBrands(); ?>
		
		<ul>
		
	  </div>
	  <div id="content_area">
	  <div id="shopping_cart">
	      <span style="float:right; font-size:18px; padding:5px;line-height:20px;">
		  Welcome Guest! 
		  Total Item:
		  Total Price:
		  <a style="color:#1b2d45;font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;"href="cart.php">Shopping Cart</a>
		  </span>
	  </div>
	     <div id="products_box">
		 
		 <?php
		  getPro();
		 
		 ?>
		 
		 </div>
	   </div>
	  <div id="footer"> 
	   
	   <h4 style= "text-align:center;padding-top:30px;">&copy;  A project for Software Development Lab IV.L-3 T-1, CSE, AUST. </h4>
	  
		</div>
	
	</div>
	</div>
   
   </body>
   
   </html>