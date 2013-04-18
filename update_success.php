<?php session_start();  
						

	$username = $_SESSION['name'];

	if(!empty($_SESSION['logged_in']))
{	
							
							
							// database connect
							
							include('con.php');
							
							// update new password 
							
								$pass = mysql_real_escape_string($_POST['password']);
								$c_pass = mysql_real_escape_string($_POST['c_password']);
								$newpass = md5($pass);
							
							// check if form fill property
							
							if(empty($pass)){
							
								 $_SESSION['empty_pass'] = "<font color='red'>* Please enter Password</font>";
								 header('Location:update_pass.php');
									
							
							}
							
							if($pass!=$c_pass){
							
								$_SESSION['incorrect_pass'] = "<font color='red'>* Password does not match</font>";
								header('Location:update_pass.php');
							
							}
							
							else{
							
							
	 		
	 							$updatepass = "UPDATE floks 
	 		
	 							SET Password = '$newpass'
	 		
	 							WHERE Username='$username'";
	 							
	 							if(mysql_query($updatepass)){
	 							
	 								$_SESSION['success'] = "<font color='green'>Your password updated successfully</font>";
	 								header('Location:update_pass.php');
	 							
	 							}
	 							else{
	 							
	 								die(mysql_error());
	 							
	 							}
							
							
								mysql_close($con);
							
							}
							
								
							
							}else{
							
							
								include('login.php');
							
							
							}
							
							
							 ?>