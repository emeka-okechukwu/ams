<?php

	//start session - needed to check for login 
	session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Address Processing</title>
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
		      <a class="navbar-brand" href="../ruindex.php">AMS</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="addaddress.php">Add Address</a></li>
		      <li><a href="updateaddress.php">My Address</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in">
		      </span>Login</a></li>
		    </ul>
		  </div>
	</nav> 

	<?php
		//connnect to the controller
		require("../controllers/addresscontroller.php");

		//check if submit button was clicked
		if (isset($_GET['uadd'])) {
			
			//Updating an address
		}elseif (isset($_GET['uupd'])) {
			// grad user form data
			$cid = $_GET['conid'];
			$uline1 = $_GET['uline1'];
			$uline2 = $_GET['uline2'];
			$ucity = $_GET['ucity'];
			$ustate = $_GET['ustate'];
			$ucountry = $_GET['ucountry'];
			$uzipcode = $_GET['uzipcode'];
			$upasscode = $_GET['upasscode'];

			//update address
			$update_con = update_address_fxn($cid, $uline1, $uline2, $ucity, $ustate, $ucountry, $uzipcode, $upasscode);
			if ($update_con) {
				echo "<div class='alert alert-success'>
  						<strong>Success!</strong> Address updated.
					 </div>";
					 header('Location: ../ruindex.php');
			}else{
				echo "<div class='alert alert-danger'>
  						<strong>Danger!</strong> error updating address.
					 </div>";
			}
		}elseif (isset($_GET['ufadd'])) {
			// grad user form data

			$uline1 = $_GET['uline1'];
			$uline2 = $_GET['uline2'];
			$ucity = $_GET['ucity'];
			$ustate = $_GET['ustate'];
			$ucountry = $_GET['ucountry'];
			$uzipcode = $_GET['uzipcode'];
			$upasscode = $_GET['upasscode'];
			$submittedby = $_SESSION["user_email"];

			//insert new user
			$insert_con = insert_address_fxn($uline1, $uline2, $ucity, $ustate, $ucountry, $uzipcode, $upasscode, $submittedby);
			if ($insert_con) {
				//echo success
				echo "<div class='alert alert-success'>
  						<strong>Success!</strong> new address created.
					 </div>";
					 header('Location: ../ruindex.php');
			}else{
				//echo failure
				echo "<div class='alert alert-danger'>
  						<strong>Danger!</strong> error creating address.
					 </div>";
			}
		}
	?>

</body>
</html>