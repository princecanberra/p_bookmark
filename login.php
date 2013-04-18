<?php session_start(); ?>
<?php
		/**

 	Created by ouphachay 
 	http:// ap286.com
 	Login file


	**/
	
 include('con.php');
	
	
	//prevent sql injection while get data from the form 
	
	$bad_username = $_POST['username'];
	$bad_password = $_POST['password'];
	
	$username = mysql_real_escape_string($bad_username);
	$password = mysql_real_escape_string(md5($bad_password));
	
	//check if every field completed properly 
	if($username=="" || $password=="")  
		{  
		$_SESSION['login_error']="<font color=red>* Please Enter Username and Password</font><br/><br/>";  
		 	
			header("Location:login_o.php");
		
			exit();  
		}
	$sql = mysql_query("SELECT * FROM floks WHERE username ='$username' AND password ='$password'");
	$numrow = mysql_num_rows($sql);
	 if($numrow>0){
	 
		$_SESSION['logged_in'] = true;	
		$_SESSION['name']= $username; 	
	 	header("Location:mybookmark.php");
	 
	 }
	 else{
	  
	  $_SESSION['incorrect_login']="<font color=red>* Incorrect Username or Password</font>";  
		  
		  header("Location:login_o.php");
		
			exit(); 
	  
	 
	 }
	
	
	mysql_close($con);

?>
