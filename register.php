<?php session_start (); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.reponsive.css"/>
		<link rel="stylesheet" href="css/bootstrap.responsive.min.css"/>
		<script scr="js/bootstrap.js"></script>
		<script scr="js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function()//When the dom is ready 
		{
		$("#username").change(function() 
		{ //if theres a change in the username text box

		var username = $("#username").val();//Get the value in the username text box
	if(username.length > 3)//if the length greater than 3 characters
	{
	$("#availability_status").html('<img src="img/loader.gif" align="absmiddle">&nbsp;Checking availability…');
	//Add a loading image in the span id="availability_status"

	$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "ajax_check_username.php",  //file name
    data: "username="+ username,  //data
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_username.php return value "0"
	{ 
	$("#availability_status").html('<img src="img/available.png" align="absmiddle"> <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="img/not_available.png" align="absmiddle"> <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

	}
	else
	{

	$("#availability_status").html('<font color="#cc0000">Username too short</font>');
	//if in case the username is less than or equal 3 characters only 
	}



	return false;
	});

	});
</script>
		<title>Home- pbookmark</title>
	
	</head>

	<body>
		
		<div class="content_center">
		
			<div class="span4">
				<div class="logo">
				
				
				</div>
				<h1>LOGO</h1>
			
			</div><!-- enlogo -->
			<div class="span4">
				<div class="login_f">
				<form class="form-inline" action="login.php" method="post">
					 <input type="text" class="input-small"  name="username" placeholder="Username"/>
					 <input type="password" class="input-small" name="password" placeholder="Password"/>
					<button type="submit" class="btn"/>Sign in </button><br/>
					<a href="forgot.php">Forgot Password?</a>
							
				</form>
				
				
				</div>
			
			
			</div><!-- end login -->
			<div class="span1"></div><!-- end extra box -->
			<div class="span10"><br/><br/><br/><br/></div><!-- end clear  -->
			
			<div class="span10">
				
				<div class="regis_f">
				
				    <form class="form-horizontal" action="register_success.php" method="post">
    					<div class="control-group">
   							<label class="control-label" for="username">Username</label>
    						<div class="controls">
    						<input type="text" id="username" name="username" placeholder="Username"  /> <span id="availability_status"></span> 
   						</div>
    					</div>
    					<div class="control-group">
    						<label class="control-label" for="inputPassword">Password</label>
    						<div class="controls">
    						<input type="password" id="inputPassword" name="password" placeholder="Password"  />
    				</div>
    				</div>
    				<div class="control-group">
    						<label class="control-label" for="inputEmail">Email <small>(Optional)</small></label>
    						<div class="controls">
    						<input type="text" id="inputEmail" name="email" placeholder="Email">
    				</div>
    				</div>
    					<div class="control-group">
    						<div class="controls">
   							<button type="submit" class="btn btn-large">Sign me up</button> 
    				</div>
    				</div>
    				</form>
					<br/>
					<center>
					<span> <?php echo $_SESSION['error_regis']; ?></span><br/>
					<span> <?php  echo $_SESSION['error_regis_user'];   ?></span><br/>
					<li class="icon-info-sign"></li> <small>Email might be useful incase of forgetting your password</small>
					</center>				
					</div>
					
					<?php unset($_SESSION['error_regis']);   ?>
					<?php unset($_SESSION['error_regis_user']);   ?>
			</div><!-- end register -->
			<div class="span10"><br/><br/><br/><br/></div>
			<div class="span10">
		
				Copyright &copy <?php $date = date('Y'); echo "$date"; ?> <a href="index.php">pbookmark.me</a> <br/>Crated by: <a href="http://ap286.com" target="_blank">@ap286</a>
	
			</div>
			<div class="span9"><br/></div>
			
		</div><!-- end content_center -->
			
	
	
	
	</body>






</html>