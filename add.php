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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	//Tooltips
	$(".tip_trigger").hover(function(){
		tip = $(this).find('.tip');
		tip.show(); //Show tooltip
	}, function() {
		tip.hide(); //Hide tooltip		  
	}).mousemove(function(e) {
		var mousex = e.pageX + 20; //Get X coodrinates
		var mousey = e.pageY + 20; //Get Y coordinates
		var tipWidth = tip.width(); //Find width of tooltip
		var tipHeight = tip.height(); //Find height of tooltip
		
		//Distance of element from the right edge of viewport
		var tipVisX = $(window).width() - (mousex + tipWidth);
		//Distance of element from the bottom of viewport
		var tipVisY = $(window).height() - (mousey + tipHeight);
		  
		if ( tipVisX < 20 ) { //If tooltip exceeds the X coordinate of viewport
			mousex = e.pageX - tipWidth - 20;
		} if ( tipVisY < 20 ) { //If tooltip exceeds the Y coordinate of viewport
			mousey = e.pageY - tipHeight - 20;
		} 
		tip.css({  top: mousey, left: mousex });
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
				<li class="icon-off"></li> <a href="logout.php">Logme off</a>
				<div class="span2"><li class="icon-user"></li> <?php echo "<a href='mybookmark.php'>$username</a>"; ?></div>
				
				
					
					
							
			
				
				
				</div>
			
			
			</div><!-- end login -->
			<div class="span1"></div><!-- end extra box -->
			<div class="span10"><br/><br/><br/></div><!-- end clear  -->
		
			<div class="span10">
				<li class="icon-heart"></li> Bookmark your useful sites for future visit<br/><br/>
				
				 <?php echo $_SESSION['add_error'] ?>
				<br/><br/>
				<div class="regis_f">
				    <form class="form-horizontal" action="add_success.php" method="post">
    					<div class="control-group">
   							<label class="control-label" for="inputTitle">Title</label>
    						<div class="controls">
    						<input class="input-xxlarge" type="text" id="inputTitle" name="title" placeholder="Title of your bookmark" > 
   						</div>
    					</div>
    					<div class="control-group">
   							<label class="control-label" for="inputUrl">Url</label>
    						<div class="controls">
    						<input class="input-xxlarge" type="text" id="inputUrl" name="url" placeholder="Url of the website that you want to bookmark" > <a href="#" class="tip_trigger"> <li class="icon-info-sign"></li> <span class="tip">Make sure you include: http://</span></a></p>
   						</div>
    					</div>
    					<div class="control-group">
   							<label class="control-label" for="inputEmail">Type</label>
    						<div class="controls">
    						<select class="span2" name="type">
    							<option value="General">General</option>
    							<option value="News">News</option>
    							<option value="Technology">Technology</option>
    							<option value="Sport">Sports</option>
    							<option value="Entertainment">Entertainment</option>
    						
    						
    						</select>
   						</div>
    					</div>
    					<div class="control-group">
    						<div class="controls">
   							<button type="submit" class="btn btn-large">Bookmark It</button> 
   							<button type="reset" class="btn btn-large">Clear Form</button>
    				</div>
    				</div>
    				</form>
					<?php unset($_SESSION['add_error']); ?>
					
				
				</div>
				
				<div class="span10"><br/><br/><br/><br/></div>
			<center><div class="span10">
		
				Copyright &copy 2013 <a href="#">pbookmark.me</a>
	
			</div></center>
			
			</div><!-- end register -->
			
			<div class="span9"><br/></div>
			
			
		</div><!-- end content_center -->
			
	
	
	
	</body>






</html>



<?php }else


{
	
			include('login_o.php');	 
}

?>

