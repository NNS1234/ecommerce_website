<!DOCTYPE>

<?php

include("includes/db.php"); 
if(isset($_GET['edit_pro']))
{  
  $get_id =$_GET['edit_pro']; 
  $get_pro="select * from products where product_id='$get_id'";
$run_pro=mysqli_query($con,$get_pro);
// $i=0;
$row_pro=mysqli_fetch_array($run_pro);
	
	$pro_id=$row_pro['product_id'];
	$pro_title=$row_pro['product_title'];
	$pro_image=$row_pro['product_image'];
	$pro_price=$row_pro['product_price'];
	$pro_desc=$row_pro['product_desc']; 
	$pro_keywords=$row_pro['product_keywords'];
	$pro_cat=$row_pro['product_cat']; 
	$pro_brand=$row_pro['product_brand']; 
	
	 $get_cat="select * from catagories where cat_id='$pro_cat'" ;
	  $run_cat = mysqli_query($con,$get_cat);
	   $row_cat=mysqli_fetch_array($run_cat); 
	   $category_title =$row_cat['cat_title'];
	   
	   $get_brand="select * from brands where brand_id='$pro_brand'" ;
	  $run_brand = mysqli_query($con,$get_brand);
	   $row_brand=mysqli_fetch_array($run_brand); 
	   $brand_title =$row_brand['brand_title'];
	 
 
}
	
?>
<html>

 <head>
   <title>Update Product</title>
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
   
       <form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="700" border="2">
		<tr align="left" padding="5px">
		   <td colspan="7"><h2>Edit & Update Products</h2></td>
		
		</tr>
		
		<tr>
		   <td align="right"><b>Product Title:</b></td>
		   <td><input type="text" name="product_title" size="60" value="<?php echo $pro_title; ?>"/></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Category:</b></td>
		   <td>
		     <select name="product_cat" >
		     <option><?php echo $category_title; ?></option>
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
		     <option><?php echo $brand_title; ?></option>
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
		   <td><input type="file" name="product_image"/><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"/></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Price:</b></td>
		   <td><input type="text" name="product_price"  value="<?php echo $pro_price; ?>"/></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Description:</b></td>
		   <td><textarea name="product_desc" cols="30" rows="10"><?php echo $pro_desc; ?></textarea></td>
		</tr>
		<tr>
		   <td align="right"><b>Product Keywords:</b></td>
		   <td><input type="text" name="product_keywords" size="50" value="<?php echo $pro_keywords; ?>"/> </td>
		</tr>
	
		<tr align="center">
		   <td colspan="8"><input type="submit" name="update_product" value="&#10004Update"/></td>
		</tr>
		
      </form>
		</body>
   
		</html>
		<?php
 
  if(isset($_POST['update_product'])){
	  //getting text data 
	   $update_id =$pro_id;
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
	  
	   $update_product="update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',
	    product_price='$product_price', product_desc='$product_desc', product_image='$product_image', product_keywords='$product_keywords' where 
		 product_id='$update_id'";
		
		$run_product=mysqli_query($con,$update_product);
		
		if($run_product){
			echo"<script>alert('Product has been updated!')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";
			
			
			
			
			
			
		}
	  
  }
  ?>
 
 