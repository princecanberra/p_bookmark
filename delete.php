<?php session_start();


 // check if this is login user 
 
 if(!empty($_SESSION['logged_in']))
{
			// connect to database 
			
			include('con.php');
			
			// get id  form my boomark 
			
			$id = mysql_real_escape_string($_GET['id']);
			$user_id = $_SESSION['id'];

			$delete = "DELETE FROM bookmark WHERE B_id ='$id' AND User_id='$user_id'";
			if(mysql_query($delete)){
			
				header('Location:mybookmark.php');
			
			}
			else{
			
				die(mysql_error());
			}
			
			mysql_close($con);

}

else {

			include('login_o.php');

	 }


?>