<h2 style="text-align:center;">DO YOY REALLY WANT TO DELETE YOUR ACCOUNT ?</h2>  
 <form action="" method="post"> 
 
  <input type="submit" name="yes" value="YES" /> 
  <input type="submit" name="no" value="NO" />
   
   
 </form>
  <?php 
    include("includes/db.php"); 
	 $user=$_SESSION['customer_email']; 
	 if(isset($_POST['yes'])) 
	 {  
       $delete_customer ="delete from customers where customer_email='$user'" ;
       $run_customer= mysqli_query($con,$delete_customer);
	       echo "<script>alert('ACCOUNT DELETED!')</script>" ; 
		   echo "<script>window.open('../index.php','_self')</script>" ;
    
	 } 
	  if(isset($_POST['no']))
	  {
		  echo "<script>alert('THANKS FOR BEING WITH US!')</script>" ; 
		   echo "<script>window.open('my_account.php','_self')</script>" ;  
	  }
  
  
  ?>