<?php
	//start session - needed to check for login 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Tech Exams Home</title>
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
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		      <?php 
		      //show login or logout
		      echo (isset($_SESSION["user_id"]))? "<a href='login/logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a>" : "<a href='login/login.php'><span class='glyphicon glyphicon-log-in'></span>Login</a>";?>
		      </li>
		    </ul>
		    <!-- Search form
		    <form class="navbar-form navbar-left" action="view/spsearchaddress.php">
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
	    	<h1>Address Management System (AMS)</h1> 
	    	<p>Enter your given address unique identifier in the search bar to find the details under that address</p> 
	  	</div>
	  	<form action="view/spsearchaddress.php">
		    <div class="form-group">
		    	<input type="text" name="searcht" class="form-control" placeholder="Search" required>
		    </div>
		    <button type="submit" name="csearch" class="btn btn-default">Search</button>
		</form>
	</div>
</body>
</html>