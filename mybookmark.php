<?php session_start();

// dadabase connect 

include('con.php');

//  get user session 

$username = $_SESSION['name'];


// check if login is valided 

if(!empty($_SESSION['logged_in'])){?>

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
$(document).ready(function(){
    $('.confirm').click(function(){
        var answer = confirm("Are you sure you want to delete this bookmark?");
        if (answer){
            return true;
        } else {
            return false;
        }
    });
});
</script>
		<title>Home- pbookmark</title>
	
	</head>

	<body>
		
		<div class="content_bookmark">
		
			<div class="span4">
				<div class="logo">
				
				
				</div>
				<h1>LOGO</h1>
			
			</div><!-- enlogo -->
			<div class="span4">
				<div class="login_f">
				<li class="icon-off"></li> <a href="logout.php">Logme off</a>
				<div class="span2"><li class="icon-user"></li> <?php echo "<a href='mybookmark.php'>$username</a>"; ?> &nbsp;&nbsp;<li class=" icon-filter"></li><a href="update_pass.php">password</a></div>
				
				
				<?php  
				 // get user id  
				 
				 $sql = "SELECT User_id FROM floks WHERE Username ='$username'";
				 
				 $result = mysql_query($sql);
				 $output = mysql_fetch_array($result);
				 
				 $_SESSION['id'] = $output['User_id'];
				
					
		
				
				?>
					
							
			
				
				
				</div>
			
			
			</div><!-- end menu-->
			<div class="span1"></div><!-- end extra box -->
			<div class="span10"><br/><br/><br/></div><!-- end clear  -->
			<div class="span6"></div>
			<div class="span4"><img src="img/add.png"> <a href="add.php">Add new book mark</a></div>
			
			<div class="span2"><div class="gr"><span class="g_by"> Sort by Group</span> <br/><br/>
			<p><li class="icon-home"></li> <a href="mybookmark.php">Home</a></p>
			<p><li class="icon-list"></li> <a href="mybookmark.php<?php echo "?type=General"; ?>">General</a></p>
			<p><li class="icon-globe"></li> <a href="mybookmark.php<?php echo "?type=News"; ?>">News</a></p>
			<p><li class="icon-hdd"></li> <a href="mybookmark.php<?php echo "?type=Technology"; ?>">Technology</a></p>
			<p><li class="icon-fire"></li> <a href="mybookmark.php<?php echo "?type=Sport"; ?>">Sports</a></p>
			<p><li class="icon-film"></li> <a href="mybookmark.php<?php echo "?type=Entertainment"; ?>">Entertainment</a></p>
			
			</div>
			</div>
			<div class="span9">
			
			<?php  
			// get bookmark from db 
				
				$s_type = $_GET['type'];
				
				if($s_type==""){
					$bookmark ="SELECT * FROM floks,bookmark  WHERE Username ='$username' AND floks.User_id = bookmark.User_id";
				$then = mysql_query($bookmark);
				echo "<br/><table class='table table-hover'>
					
					<tr class='h'>
					
						<td>Name</td>
						<td>Kind</td>
						<td>Date</td>
					
					
					
					<tr>
				
				";
				while($pullout = mysql_fetch_array($then)){
				
				
					$id = $pullout['B_id'];
					$title = $pullout['Title'];
					$type = $pullout['Type'];
					$date = $pullout['Date'];
					$url = $pullout['Url'];
					$realdate = date('d M Y',strtotime($date));
				
					echo "
					<tr>
						<td><li class='icon-star-empty'></li> <a href='$url' target='_blank'>$title</a>&nbsp;&nbsp;&nbsp; <span class='removeService'><a class='confirm' href='delete.php?id=$id'><li class='icon-trash'></li></a></span> </td>
						<td>$type</td>
						<td>$realdate</td>
					
					</tr>";
					
				
				
				
					
				
				
				
				
				
				}
			
			echo "</table>";

				
				
				
				
				}else{
				
				$bookmark ="SELECT * FROM floks,bookmark  WHERE Username ='$username' AND Type ='$s_type' AND floks.User_id = bookmark.User_id";
				$then = mysql_query($bookmark);
				echo "<br/><table class='table table-hover'>
					
					<tr class='h'>
					
						<td>Name</td>
						<td>Kind</td>
						<td>Date</td>
					
					
					
					<tr>
				
				";
				while($pullout = mysql_fetch_array($then)){
				
				
					$id = $pullout['B_id'];
					$title = $pullout['Title'];
					$type = $pullout['Type'];
					$date = $pullout['Date'];
					$url = $pullout['Url'];
					$realdate = date('d M Y',strtotime($date));
				
					echo "
					<tr>
						<td><li class='icon-star-empty'></li> <a href='$url' target='_blank'>$title</a>&nbsp;&nbsp;&nbsp; <span class='removeService'><a class='confirm' href='delete.php?id=$id'><li class='icon-trash'></li></a></span> </td>
						<td>$type</td>
						<td>$realdate</td>
					
					</tr>";
					
				
				
				
					
				
				
				
				
				
				}
			
			echo "</table>";

				
				
				
				}
			
							
				mysql_close($con);
			
			?>
				<br/>
				
							
			</div><!-- end table -->
			<div class="span10"><br/><br/><br/><br/></div>
			<div class="span10">
		
				Copyright &copy 2013 <a href="#">pbookmark.me</a><br/>
				
	
			</div>
			<div class="span9"><br/></div>
			
		</div><!-- end content_center -->
			
	
	
	
	</body>






</html>







<?php }else{ 


			include('login_o.php');


}


?>