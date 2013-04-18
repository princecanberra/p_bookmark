<?php session_start();?>
<?php

	$username = $_SESSION['name'];

	if(!empty($_SESSION['logged_in']))
{?>

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
				<li class="icon-off"></li> <a href="logout.php">Logme off</a>
				<div class="span2"><li class="icon-user"></li> <?php echo "<a href='mybookmark.php'>$username</a>"; ?></div>
				
				
					
					
							
			
				
				
				</div>
			
			
			</div><!-- end login -->
			<div class="span1"></div><!-- end extra box -->
			<div class="span10"><br/><br/><br/></div><!-- end clear  -->
			
			<div class="span10">
				
				<div class="regis_f">
				    <form class="form-horizontal" action="update_success.php" method="post">
    					<div class="control-group">
   							<label class="control-label" for="inputPassword">Password</label>
    						<div class="controls">
    						<input type="password" id="inputPassword" name="password" placeholder="Password">
   						</div>
    					</div>
    						<div class="control-group">
   							<label class="control-label" for="inputPassword">Confirm Password</label>
    						<div class="controls">
    						<input type="password" id="inputPassword" name="c_password" placeholder="Confirm Password">
   						</div>
    					</div>
    					<div class="control-group">
    						<div class="controls">
   							<button type="submit" class="btn btn-large">Update Password</button> 
    				</div>
    				</div>
    				</form>
							<center><?php echo $_SESSION['empty_pass'];   ?></center>
							<center><?php echo $_SESSION['incorrect_pass'];   ?></center>
							<center> <?php echo $_SESSION['success'];  ?> </center>		
							
							<?php unset($_SESSION['empty_pass']); ?>
							<?php unset($_SESSION['incorrect_pass']); ?>
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



<?php }else


{
	
			include('login_o.php');	 
}

?>

