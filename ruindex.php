<?php
	//start session - needed to check for login 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Address Management System</title>
	<meta charset="utf-8">
	
	<!--CDN Bootstrap and Jquery-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>
<body>
	<!--Menu-->
	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">AMS</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="view/addaddress.php">Add Address</a></li>
		      <li><a href="view/updateaddress.php">My Address</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		      <?php 
		      //show login or logout
		      echo (isset($_SESSION["user_id"]))? "<a href='login/logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a>" : "<a href='login/login.php'><span class='glyphicon glyphicon-log-in'></span>Login</a>";?>
		      </li>
		    </ul>
		    <!--Search form-->
		    <!-- <form class="navbar-form navbar-left" action="view/updateaddress.php">
		      <div class="form-group">
		        <input type="text" name="searcht" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" name="csearch" class="btn btn-default">Search</button>
		    </form> -->
		  </div>
	</nav>
		<!--Header-->
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to Address Management System (AMS)</h1> 
			<p>Follow the steps below to get started</p>
			<p>1. Send an email with proof of your residency: <a href='mailto:emeka.okechukwu@ashesi.edu.gh?subject=Address Verification Details&body=Please find attached to this email document my address verification documents for my account.'>Click here</a></p>
			<p>2. Await confirmation to use the system</p>
			<p>3. Hover to "Add Address" on the navigation bar and follow the instructions</p>
			<p><a href="view/deleteprofile.php?id=<?php echo $_SESSION["user_uemail"]; ?>">Close my information</a></p>
		</div>
	</div>
</body>
</html>