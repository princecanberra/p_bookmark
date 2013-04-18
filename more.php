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
			<div class="span1"></div>
			<div class="span8">
				<div class="more">
					<span class="lead">What's boxmark?</span>
					<p>Boxmark is a free Internet service that allows you to keep your browser bookmarks and favorites site online so you can access them from anywhere and any time in the world. </p>
					<p>With Boxmark all your bookmark sites will store privately, so nobody can see your bookmark only you can see it just likes bookmark on your own browser but with this service you can access to your bookmark any times and anywhere just logon to your account and all your bookmarks will be there! </p>
					<span class="lead">I can bookmark any site on my browser why i need to use this service?</span>
					<p>Well, Actually you might not need this service if you carry your computer all the time but if you don't, this service might be useful for you because with this service you can access your bookmark from anywhere and from any computer that connect to the internet just logon to your account then again all your bookmark sites will be there.  And another thing is, you don't need to worry about losing your bookmark sites when you install new OS on your computer or upgrade your browser.</p>
					<span class="lead">Is it free?</span>
					<p> As mentioned, this service is entirely FREE. We do not charge you anything or show annoying ads or send spam to your email address. We only use your email address to send message about your account or your password when you forget it and make a request for it. So simply <a href="register.php">signup</a> it will take 30 seconds to complete and enjoy your free service for life time  </p>
					<a class="t_o_p" href="#top">^top</a><br/>
					<span class="lead">What kind of website that i can bookmark?</span>
					<p>You can bookmarked any sites that you need to visit often and do not want to remember the URL for, like forums, blogs, shopping sites, news sites,with particular long url, or when you doing the research and need to use these URL as references. </p>
				
				
				
				</div>
			
			
			</div><!-- end photo home -->
			
			<div class="span10"><br/><br/><br/><br/></div>
			<div class="span10">
		
				Copyright &copy <?php echo "$date"; ?> <a href="index.php">pbookmark.me</a> <br/>Crated by: <a href="http://ap286.com" target="_blank">@ap286</a></div>
			<div class="span9"><br/></div>
		</div><!-- end content_center -->
			
		
	
	
	</body>






</html>