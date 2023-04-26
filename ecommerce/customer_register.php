

<!DOCTYPE>
<?php 
 
 session_start();
include ("functions/functions.php");
include("includes/db.php");

?>
<html>
 <head>
   <title> Online Shop </title>
   		<style>
		html, body, div, span, applet, object, iframe,
	    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed, 
		figure, figcaption, footer, header, hgroup, 
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
				margin: 0;
				padding: 0;
				border: 0;
				vertical-align: baseline;
									}
		body {
			background-image: url("images/tile7.jpg");
			margin: 0;
			padding: 0;
			
		}
		.main_wrapper{
		width:1000px;
		height:auto;
		margin:auto;
		background:silver;
	
			}


.header_wrapper{
	width:1000px;
	height:100px;
	margin:auto;
	
}
#logo1{float:left;}
#logo{float:middle;}
#banner{float:right;}

.menubar{
	width:1000px;
	height:30px;
	color:white;
	background:gray;
    margin:auto;	

	
}
#menu{
	padding:0;
	margin:0;
	line-height:32px;
	
}

#menu li{
	list-style:none;
	display:inline;
	
	
	
}

#menu a{
	text-decoration:none;
	padding:15px;
	margin:5px;
	color:white;
	font-size:15px;
	font-family:COMIC SANS MS;
	
	
}

#menu a:hover{color:orange;font-weight:bolder;}
#form{float:right;padding-right:8px;}


.content_wrapper{
	width:1000px;
	margin:auto;
	background:white;	
}

#content_area{
	width:800px;
	float:right;
	background:white;
	
}

#sidebar{
    width:200px;
	float:left;
	background:silver;
	
}

#sidebar_title{
	background-color:silver;
	color:Black;
	font-size:22px;
	font-family:COMIC SANS MS;
	padding:10px;
	text-align:center;
	
}

#cats{
	
	text-align:center;
}
#cats li{list-style:none;}
#cats a{color:white;padding-left:5px;margin:auto;text-align:center;font-size:18px;font-family:COMIC SANS MS;}
#cats a:hover{color:orange;font-weight:bolder;}


#products_box{
	width:780px;
	text-align:center;
	margin-left:30px;
	margin-bottom:10px;
	
	
	
}
#single_product{
	
	float:left;
	margin-left:30px;
	padding:10px
	
	
}
#single_product img{border:2px solid black;}

#shopping_cart{width:800px;height:35px;background:silver;margin:none;color:white;}
#shopping_cart a:hover{font-weight:bold;}
#footer{
	width:1000px;
	height:100px;
	background:gray;
	clear:both;
	float:left;
	font-family:COMIC SANS MS;

	
	
}
	
	</style>
   
   </head>
   
   <body>
   
   <div class="main_warpper">
   
         <div class="header_wrapper"> 
		 <a href="index.php"> <img id="logo1" src="images/logo1.jpg"/> </a>
		 <img id="logo" src="images/l21.gif"/> 
		 <img id="banner"  src="images/ecb2.jpg"/>

		 

         </div>
		
	 <div class="menubar">

			<ul id="menu">
			   <li><a href="index.php">Home</a></li>
			   <li><a href="all_products.php">Products</a></li>
			   <li><a href="customer/myaccount.php">MyAccount</a></li>
			   <li><a href="../checkout.php">Sign Up</a></li>
			   <li><a href="cart.php">Shopping Cart</a></li>
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
	  <?php cart(); ?>
	  <div id="shopping_cart">
	      <span style="float:right; font-size:18px; padding:5px;line-height:20px;">
		  Welcome Guest! 
		  Total Item:<?php total_items(); ?>
		  Total Price:<?php total_price() ; ?>
		  <a style="color:#1b2d45;font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;"href="cart.php">Shopping Cart</a>
		  </span>
	  </div> 
	   
	     <form action="customer_register.php" method="post" enctype="multipart/form-data"> 
		    <table align="center" width="750"> 
			  <tr align="center">  
			  <td colspan="6"><h2> Create an Account </h2></td>
			  
			   </tr>  
			    <tr> 
			    <td align="right">Customer Name:</td>
				 <td> <input type="text" name="c_name" required/></td>
				</tr> 
				 
				 
			     
			    <tr> 
			    <td align="right"> Customer Email:</td>
				 <td><input type="text" name="c_email" required/> </td>
				</tr> 
				  
			    <tr> 
			    <td align="right">Customer Password</td>
				 <td><input type="password" name="c_pass" required/> </td>
				</tr>  
				 
				  <tr> 
			    <td align="right">Customer Image</td>
				 <td><input type="file" name="c_image" required/> </td>
				</tr> 
				 
			  
			    <tr> 
			    <td align="right">Customer Country: </td>
				 <td> 
				 <select name= "c_country " required> 
				  <option>Select a Country </option>  
				    <option>Bangladesh </option> 
                      <option>india </option> 	
                        <option>Pakisan </option> 	 
                          <option>United Arab EMIRATES</option> 
                      <option>United Kindom </option> 	
                        <option>United States </option> 							
				  </select>
 				 </td>
				</tr> 
				 
				  
			    <tr> 
			    <td align="right"> Select a City:</td>
				 <td><input type="text" name="c_city" required/></td>
				</tr>
				 
				    
			    <tr> 
			    <td align="right">Customer Contact</td>
				 <td><input type="text" name="c_contact" required/> </td>
				</tr>
				 
				 
			    <tr> 
			    <td align="right">Customer Address</td>
				 <td><input type="text" name="c_address" required/></td>
				</tr> 
				 
				  <tr align="center"> 
			    
				 <td colspan="6"><input type="submit" name="register" value="Create Account!"/> </td>
				</tr> 

			  
			  </table>
		  </form>
		 </div>
	  </div>
	
	
	  
		</div>
	
	</div>
   
   </body>
   
   </html> 
    
	<?php 
	 if($_POST['register'])
	 {  
      $ip= getIp(); 
	  $c_name =$_POST['c_name'];
        $c_email =$_POST['c_email'];
	   $c_pass =$_POST['c_pass'];
	      $c_image =$_FILES['c_image']['name'];
		    $c_image_tmp =$_FILES['c_image']['tmp_name'];
		   $c_country=$_POST['c_country'];
		     $c_city=$_POST['c_city']; 
			   $c_contact=$_POST['c_contact'];  
			    	   $c_address=$_POST['c_address']; 
					    
						
			move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image"); 
			 
			$insert_c = "insert into customers(customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image)
 			 values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')" ; 
			   
			$run_c =mysqli_query($con,$insert_c);
			 
             $sel_cart ="select * from cart where ip_add='$ip' " ; 
			  $run_cart = mysqli_query($con,$sel_cart); 
			   $check_cart =mysqli_num_rows($run_cart); 
			   if($check_cart==0)
			   { 
		          $_SESSION['customer_email'] = $c_email ;
				   
                  echo "<script>alert('Account has been created successfully!')</script>" ;		   
		           echo "<script> window.open('customer/my_account.php','_self')</script>" ;
				}
             else 
			 {
				    $_SESSION['customer_email'] = $c_email ;
                  echo "<script>alert('Account has been created successfully!')</script>" ;		   
		           echo "<script> window.open('checkout.php','_self')</script>" ;  
			 }				 
				
     }
	 
	 
	 
	 
	 
	 
	 
	 
	 ?>
	 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  