<?php session_start();



	// regiser_success.php

		include("con.php");

	// get data from the from 


	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string( $_POST['password']);
	$enpass = md5($password);
	$email = mysql_real_escape_string($_POST['email']);
	
	// check if form complete properly
	
	if($username=="" || $password=="")  
		{  
		$_SESSION['error_regis']="<font color=red>* Please Enter Username and Password</font>";   
		
			header('Location:register.php');
			exit();  
		} 


	// check if username available
	
	$checkuser ="SELECT * FROM floks WHERE Username ='$username'";
	$result = mysql_query($checkuser);
	$numrow = mysql_num_rows($result);
	if($numrow >0){
	
	
	 $_SESSION['error_regis_user']="<font color=red>* Username Already Exist</font>";   
		
			header('Location:register.php');
			exit();
	}
	
	
	// put it into database 
	
	
	
	$sql ="INSERT INTO floks

	(Username,Password,Email)

	values('$username','$enpass','$email')
	";
	
	if(mysql_query($sql)){
	
	  $success ="<center><div class='error'><font color=green> <img src='img/available.png' align='absmiddle'> Awesome ! You are now successful registered</font><br/><br/>";  
		echo $success;  
		echo "  <a href='index.php'>  
         <button class='btn'>Click here to Sign in</button></a>  
			</div></center>";  
		
			exit(); 
	
	
	}else{
	
		die(mysql_error()); 
	
	}
	
	mysql_close($con);
	
	
	
	?>