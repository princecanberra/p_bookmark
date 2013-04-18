<?php session_start();
	
	// get email from user 
	
	include('con.php');
	
	$email = mysql_real_escape_string($_POST['email']) ;
	
	// check if email filling or not 
	
	if(empty($email)){
	
			$_SESSION['empty_mail'] = "<font color='red'>* Please Enter an email</font>";
			header('Location:forgot.php');
	
	}
	
	// check if that's valid user 
	
	$sql = "SELECT Email FROM floks WHERE Email ='$email'";
	$result = mysql_query($sql);
	$numrow = mysql_num_rows($result);
	if($numrow<1){
	
		
		$_SESSION['incorrect_mail'] = "<font color='red'>* invalid email</font>";
		header('Location:forgot.php');
	
	}
	 else{
	 
	 		$code = rand(100000,999999);
	 		
	 		$newpass = md5($code);
	 		
	 		$addnewpass = "UPDATE floks 
	 		
	 		SET Password = '$newpass'
	 		
	 		WHERE Email='$email'";
	 		
	 		if(mysql_query($addnewpass)){
	 		
	 		
	 			 $sendto = "$email";
	 			 $subject = "New password from boxmark";
	 			 $from = "support@boxmark.me";
	 			 $bodymail = "Dear User<br/> You receive this email because you request that</br> you forgot your password, so please use new password below to login and once you login please change your password immediately </br>
	 			 $code ";
	 			 $mailto = @mail($sendto,$subject,$from,$bodymail);
	 			 
	 			 if($mailto){
	 			 
	 			 		 $_SESSION['success'] = "<font color='green'>New Password has been sent to your email</font>";
	 			 		header('Location:forgot.php');
	 			 
	 			 }else{
	 			 
	 			 		die();
	 			 
	 			 }
	 			 
	 			
	 		
	 		}else{
	 		
	 			die(mysql_error());
	 		}
	 		
	 		mysql_close($con);
	 
	 }



?>