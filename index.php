<?php session_start();
	
	$date = date('Y');

?>
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
				<img src="img/logo.png"/>
			
			</div><!-- enlogo -->
			<div class="span4">
				<div class="login_f">
				<form class="form-inline" action="login.php" method="post">
					 <input type="text" class="input-small" name="username" placeholder="Username"/>
					 <input type="password" class="input-small" name="password" placeholder="Password"/>
					<button type="submit" class="btn"/>Sign in </button><br/>
					<a href="forgot.php">Forgot Password?</a><br/>
					
							
				</form>
				
				
				</div>
			
			
			</div><!-- end login -->
			<div class="span1"></div><!-- end extra box -->
			<div class="span10"><br/><br/><br/></div><!-- end clear  -->
			
			<div class="span10">
				<img src="img/MacBookAir.png" width="450" height="350"/>
			
			
			</div><!-- end photo home -->
			<div class="span10">
				<br/>
				<h2 class="c"><img src="img/bookmark.png" width="64" height="64"/>Private Bookmark for your useful sites</h2>
				
				<a class="lead" href="more.php">Learn more</a>
				<br/><br/>
				<a href="register.php"> <button class="btn btn-large btn-success"><li class="icon-user icon-white"></li> Register Free Account</button></a>
			
			
			</div><!-- end register -->
			<div class="span10"><br/><br/><br/><br/></div>
			<div class="span10">
		
				Copyright &copy <?php echo "$date"; ?> <a href="index.php">pbookmark.me</a> <br/>Crated by: <a href="http://ap286.com" target="_blank">@ap286</a></div>
			<div class="span9"><br/></div>
		</div><!-- end content_center -->
			
		
	
	
	</body>






</html>