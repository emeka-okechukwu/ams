<?php
//connect to the core file for general configuration
require("../settings/core.php");

//check for login
check_login();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Search Result</title>
	<meta charset="utf-8">
	<!--CDN Bootstrap and Jquery-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="../js/address.js"></script>

</head>
<body>

	<!--Menu-->
	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="../spindex.php">AMS</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		      	<?php echo (isset($_SESSION["user_id"]))? "<a href='../login/logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a>" : " ";?>
		      </li>
		    </ul>
		    <form class="navbar-form navbar-left">
		      <div class="form-group">
		        <input type="text" name="searcht" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" name="csearch" class="btn btn-default">Search Again</button>
		    </form>
		  </div>
	</nav> 


	<?php

		//include the controller
		require('../controllers/addresscontroller.php');

		//define avaribale for address listing
		$address_list;

		//check for search
		if (isset($_GET['csearch'])) {
			//get search term and store in variable
			$sterm = $_GET['searcht'];

			//runn search address function
			global $address_list; 
			$address_list = search_address_fxn($sterm);
		}else{
			//dsiplay standard list of customer
			global $address_list; 
			//run the function to return all address
			$a = $_SESSION["user_email"];
			$address_list = view_all_address_fxn($a);
		}
		
		//Page title depending on search or general address list
		echo "<ul class='list-group'>";
		echo "<li><a href='#' class='list-group-item active'>";
		echo (isset($_GET['csearch']))? 'Here are the Search results' : 'Address List';
		echo "</a></li>";
		
		//check permission 
		$u_perm = check_permission();

		//check if a address was found
		if ($address_list) {
			//run through returned list of address
			foreach ($address_list as $address) {
				//grad address id
				$uuid = $address['pid'];
				//Display results
                echo "<li class='list-group-item'>". $address['line 1'].", ".$address['line 2'].", ".$address['city'].", ".$address['state'].", ".$address['country'].". ZIP CODE: ".$address['zipcode']."";
			}
		}else{
			echo "<li>No address found under that detail</li>";
		}

		
		//end of list
		echo "</ul>";

	?>
</body>
</html>