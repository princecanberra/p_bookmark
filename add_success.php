<?php session_start();

	include('con.php');
	
	
	
	if(!empty($_SESSION['logged_in'])){
	
		$username = $_SESSION['name'];
	
		$user ="SELECT User_id FROM floks WHERE Username='$username' ";
		$result = mysql_query($user);
		$output = mysql_fetch_array($result);
		
		$user_id = $output['User_id'];
	
		
		$title = mysql_real_escape_string($_POST['title']);
		$url = mysql_real_escape_string($_POST['url']);
		$date = date("Y-m-d H:i:s");
		$type = $_POST['type'];
	
	
	// check if data filled properly 
	
	if($title=="" ||$url ==""){
	
		$_SESSION['add_error'] ="<font color='red'> * Please Enter Title and Url</font></div>";
		
		header('Location:add.php');
	
	}else{
	
		// if form ok insert into database 
		
		
		$sql = "INSERT INTO bookmark
			(Title,Url,Date,Type,User_id)
			VALUES('$title','$url','$date','$type','$user_id')		
		"; 
		
		if(mysql_query($sql)){
		
			header('Location:mybookmark.php');
		
		}else {
		
			die(mysql_error());
		
		}
		
		
		mysql_close($con);
	
	
	
	}
	
	
	
	
	
	}  else{ 
	
	
				include('login_o.php');
	
	
 }






?>