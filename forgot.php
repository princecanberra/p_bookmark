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
		
		<div class="content_center">
		
			<div class="span4">
				<div class="logo">
				
				
				</div>
				<h1>LOGO</h1>
			
			</div><!-- enlogo -->
			<div class="span4">
				<div class="login_f">
				<form class="form-inline" action="login.php" method="post">
					 <input type="text" class="input-small" name="username" placeholder="Username"/>
					 <input type="password" class="input-small" name="password" placeholder="Password"/>
					<button type="submit" class="btn"/>Sign in </button><br/>
					<a href="forgot.php">Forgot Password?</a>
							
				</form>
				
				
				</div>
			
			
			</div><!-- end login -->
			<div class="span1"></div><!-- end extra box -->
			<div class="span10"><br/><br/><br/></div><!-- end clear  -->
			
			<div class="span10">
				
				<div class="regis_f">
				    <form class="form-horizontal" action="reset_pass.php" method="post">
    					<div class="control-group">
   							<label class="control-label" for="inputEmail">Email</label>
    						<div class="controls">
    						<input type="text" id="inputEmail" name="email" placeholder="Email">
   						</div>
    					</div>
    					<div class="control-group">
    						<div class="controls">
   							<button type="submit" class="btn btn-large">Reset Password</button> 
    				</div>
    				</div>
    				</form>
							<center><?php echo $_SESSION['empty_mail'];   ?></center>
							<center><?php echo $_SESSION['incorrect_mail'];   ?></center>
							<center> <?php echo $_SESSION['success'];  ?> </center>		
							
							<?php unset($_SESSION['empty_mail']); ?>
							<?php unset($_SESSION['incorrect_mail']); ?>
							<?php unset($_SESSION['success']); ?>
				
				</div>
			
			</div><!-- end register -->
			<div class="span10"><br/><br/><br/><br/></div>
			<div class="span10">
		
				Copyright &copy <?php $date = date('Y'); echo "$date"; ?> <a href="index.php">pbookmark.me</a> <br/>Crated by: <a href="http://ap286.com" target="_blank">@ap286</a>
	
			</div>
			<div class="span9"><br/></div>
			
		</div><!-- end content_center -->
			
	
	
	
	</body>






</html>