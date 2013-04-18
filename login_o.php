<?php session_start(); ?>
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
		<title>Home- pbookmark</title>
	
	</head>

	<body>
		<div class="content_center_r">
		
		
		
		
				<div class="span10">
		
		<p class="lead">Please login or <a href="register.php">register</a>  </p>
				
				<div class="regis_f">
				
				    <form class="form-horizontal" action="login.php" method="post">
    					<div class="control-group">
   							<label class="control-label" for="username">Username</label>
    						<div class="controls">
    						<input type="text" id="username" name="username" placeholder="Username" /> <span id="availability_status"></span> 
   						</div>
    					</div>
    					<div class="control-group">
    						<label class="control-label" for="inputPassword">Password</label>
    						<div class="controls">
    						<input type="password" id="inputPassword" name="password" placeholder="Password"  />
    				</div>
    				</div>
    					<div class="control-group">
    						<div class="controls">
   							<button type="submit" class="btn">Sign in</button> 
    				</div>
    				</div>
    				</form>
    				<center>
    					<span><?php echo $_SESSION['login_error'];?></span>
					    <span><?php  echo $_SESSION['incorrect_login']; ?></span>
    				
    				</center>
					
		
		</div>
		
					<?php unset($_SESSION['login_error']); ?>
					<?php unset($_SESSION['incorrect_login']); ?>
	
	
		<br/>
		<div class="span10"><br/><br/><br/><br/></div>
			<div class="span10">
		
				Copyright &copy <?php $date = date('Y'); echo "$date"; ?> <a href="index.php">pbookmark.me</a> <br/>Crated by: <a href="http://ap286.com" target="_blank">@ap286</a>
	
			</div>
			<div class="span9"><br/></div>
	
	</body>



	



