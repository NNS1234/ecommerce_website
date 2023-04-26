 <h2 style="text-align:center;">Change Your Password</h2> 
 
<form action="" method="post" >
    <table align="center">
	 
   <b>Enter Current Password:</b><input type="password" name="current_pass" required><br>
   <b>Enter New Password:</b><input type="password" name="new_pass" required><br> 
   <b>Confirm New Password:</b><input type="password" name="new_pass_again" required><br>
	  <input type="submit" name="change_pass" value="Change Password"/>
 
</form> 
<?Php  
 

include("includes/db.php"); 
 if(isset($_POST['change_pass']))
 {  
    $user= $_SESSION['customer_email'];
    $current_pass =$_POST['current_pass'];
	 $new_pass=$_POST['new_pass']; 
	 $new_again=$_POST['new_pass_again'];
	   
	    $sel_pass="select from customer where customer_pass='$current_pass' and  customer_email='$user'" ;
 $run_pass=mysqli_query($con,$sel_pass);
   $check_pass= mysqli_num_rows($run_pass); 
     if($check_pass==0) 
	 {  
             echo "<script>alert('Password wrong!')</script>" ;
			  exit();
		     
     }  
	 if($new_pass!=$new_again) 
	 {
		    echo "<script>alert('New password do not match !')</script>" ;
	        exit();
	  }
     else
	 {
		   $update_pass ="update customers set customer_pass='$new_pass' where customer_email='$user'" ;
	         $run_update=mysqli_query($con,$update_pass);
            echo "<script>alert('Password updated successfully!')</script>" ; 
					              echo "<script>window.open('my_account.php','_self')</script>" ;
	  
	 }
   
   
 }
    
	?>

 
   