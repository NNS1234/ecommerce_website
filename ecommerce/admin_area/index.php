<!DOCTYPE>
<html>
<head>
  <title>admin pannel </title>
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
			background-image: url("../images/tile7.jpg");
			margin: 0;
			padding: 0;
			
		}
	.main_wrapper{
		width:1000px;
		height:auto;
		margin:auto;
		
		
	
			}
			
			
  #header{
	width:1000px;
	height:100px;
	background-image:url("images/bg-header.jpg");
	border-bottom:5px groove orange;
}
		#left{
			width:795px;
			height:800;
			background-image:url("../images/tile2.jpg");
			float:left;
			margin:auto;
			
			
			
			
		}
		#right{
		width:200px;
		height:800;
		float:right;
		border-left:5px groove orange;
		border-bottom:5px groove orange;
		background:#187eae;	
		}
			
		#right a{
		text-decoration:none;
		color:white;
		font-size:18px;
		font-family:palatino;
		padding:5px;
		margin:5px;
		display:block;
		
		}	
		#right a:hover{color:orange;font-weight:bolder;}
		h3 {
			color:black;
			font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
		}
		
		</style>



</head>

<body>

  
   <div class="main_wrapper">
   
         <div id="header"></div>
		 <div id="right">
		 <h3 style="text-align:center;">Manage Content</h3>
		 
		   <a href="index.php?insert_product">Insert Product</a>
		    <a href="index.php?view_products">View all products</a>
			 <a href="index.php?insert_categories">Insert categories</a>
			 <a href="index.php?view_categories">View all categories</a>
			  <a href="index.php?insert_brands">Insert new brands</a>
			   <a href="index.php?view_brands">View all brands</a>
			    <a href="index.php?view_customers">View Customers</a>
				 <a href="index.php?view_customers">View orders</a>
				  <a href="index.php?view_payments">View payments</a>
				   <a href="logout.php">Admin Log Out</a>
		 
		 
		 
		 </div>
		 
		 <div id="left">
		 <?php
		 if(isset($_GET['insert_product'])){
			 
			include("insert_product.php"); 
			 
	  }
	  if(isset($_GET['view_products'])){
			 
			include("view_products.php"); 
			 
	  } 
	   if(isset($_GET['edit_pro'])){
			 
			include("edit_pro.php"); 
			 
	  }  
	   if(isset($_GET['delete_pro'])){
			 
			include("delete_pro.php"); 
			 
	  }
	  
		 
		?> 
		 
		 
		 
		 
		 
		 
		 </div>
	 




     </div>
</body>
</html>
