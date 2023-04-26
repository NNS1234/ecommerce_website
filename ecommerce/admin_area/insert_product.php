<!DOCTYPE>

<?php

include("includes/db.php");
?>
<html>

 <head>
   <title>Inserting Product</title>
   <style>
		body {
			background-image: url("../images/tile7.jpg"); 
			margin: 0;
			padding: 0;
		}
		
		
		h2{
			color:#4f59ea;
			font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
		}
		
		input[type=text]{
                border-radius: 10px;
                border-style: solid;
                border-color: #4f59ea;
                color: rgb(171,171,171);
                font-style: italic;
                padding:8px;

                width: 200px;
         }

		input[type=submit]{
			    display: inline-block;
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color:#4f59ea;
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
				
				
                /*For grow effect on hover*/
                -webkit-transition:all 0.2s ease-out;
                -moz-transition:all 0.2s ease-out;
                -ms-transition:all 0.2s ease-out;
                -o-transition:all 0.2s ease-out;
                transition:all 0.2s ease-out;
            }

            input[type=submit]:hover{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color:#4f59ea;
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
				
				 /*for grow effect on hover */
                -webkit-transform:scale(1.2);
                -moz-transform:scale(1.2);
                -ms-transform:scale(1.2);
                -o-transform:scale(1.2);
                transform:scale(1.2);
            } 
						
			input[type=submit]:active {
			  background-color: #4f59ea;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
			}
	
     
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
}
tr:nth-child(even){background-color: #b9dbec}

th {
    background-color: #4CAF50;
    color: white;
}

tr:hover{background-color:#f5f5f5}
		</style>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
	
  
   
  </head>
   
   <body>
   
       <form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="700" border="2">
		<tr align="left" padding="5px">
		   <td colspan="7"><h2>Insert New Products !</h2></td>
		
		</tr>
		
		<tr>
		   <td align="right"><b>Product Title:</b></td>
		   <td><input type="text" name="product_title" size="60" required /></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Category:</b></td>
		   <td>
		     <select name="product_cat" >
		     <option>select category</option>
			 <?php
			 	$get_cats="select * from categories";
			$run_cats=mysqli_query($con,$get_cats);
			while($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id =$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
		
			echo "<option value='$cat_id'>$cat_title</option>";
		
			}
			?>
		   </select>
		   </td>
	</tr>
		<tr>
		   <td align="right"><b>Product Brand:</b></td>
		   <td>
		     <select name="product_brand" >
		     <option>select brand</option>
			 <?php
			 	
			$get_brands="select * from brands";
			$run_brands=mysqli_query($con,$get_brands);
			while($row_brands=mysqli_fetch_array($run_brands)){
			$brand_id=$row_brands['brand_id'];
			$brand_title=$row_brands['brand_title'];
		
			echo "<option value='$brand_id'>$brand_title</option>";
		
	}
			 
			 
			 ?>
		   </select>
		   
		   </td>
		</tr>
		<tr>
		   <td align="right"><b>Product Image:</b></td>
		   <td><input type="file" name="product_image" required/></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Price:</b></td>
		   <td><input type="text" name="product_price"/></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Description:</b></td>
		   <td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Keywords:</b></td>
		   <td><input type="text" name="product_keywords" size="50"/> </td>
		</tr>
	
		<tr align="center">
		   <td colspan="8"><input type="submit" name="insert_post" value="&#10004Insert"/></td>
		</tr>
		
      </form>
		</body>
   
		</html>
		<?php
 
  if(isset($_POST['insert_post'])){
	  //getting text data 
	  $product_cat=$_POST['product_cat']; 
	  $product_brand=$_POST['product_brand']; 
	  $product_title=$_POST['product_title'];
	  $product_price=$_POST['product_price'];
	  $product_desc=$_POST['product_desc'];
	  $product_keywords=$_POST['product_keywords'];
	  //getting image 
	    $product_image=$_FILES['product_image']['name'];
	    $product_image_tmp=$_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
	  
	   $insert_product="insert into products
	   (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords)
	    values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
		
		$insert_pro=mysqli_query($con,$insert_product);
		
		if($insert_pro){
			echo"<script>alert('Product has been inserted!')</script>";
			echo "<script>window.open('index.php?insert_product','_self')</script>";
			
			
			
			
			
			
		}
	  
  }
  ?>
 
 