<?php
//connect to the core file for general configuration
require("../settings/core.php");

//check for login
check_login();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Address</title>
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
		      <a class="navbar-brand" href="../ruindex.php">AMS</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="addaddress.php">Add Address</a></li>
		      <li class="active"><a href="#">My Address</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		      	<?php echo (isset($_SESSION["user_id"]))? "<a href='../login/logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a>" : " ";?>
		      </li>
		    </ul>
		    <!-- <form class="navbar-form navbar-left">
		      <div class="form-group">
		        <input type="text" name="searcht" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" name="csearch" class="btn btn-default">Search</button>
		    </form> -->
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
		echo (isset($_GET['csearch']))? 'Search Result' : 'View Your Address';
		echo "</a></li>";
		
		//check permission 
		$u_perm = check_permission();

		//check if a address was found
		if ($address_list) {
			//run through returned list of address
			foreach ($address_list as $address) {
				//grad address id
				$uuid = $address['pid'];
				//check for permission 
				//Admin can edit and delete
				//Standard can only add
				if ($u_perm == 1) {
					//admin user
					echo "<li class='list-group-item'>". $address['line 1'].", ".$address['line 2'].", ".$address['city'].", ".$address['state'].", ".$address['country'].". ZIP CODE: ".$address['zipcode']." <a href='addaddress.php?ppid=$uuid'>edit</a> </li>";
				}else{
					//standard user
					echo "<li class='list-group-item'>". $address['address line 1']."- ".$address['address line 2']."- ".$address['address town']."- ".$address['address country']." - ".$address['address postcode']." - ".$address['address passcode']." - ".$address['submittedby']." You cannot edit/delete </li>";
				}
				
			}
		}else{
			echo "<li>No address found</li>";
		}

		
		//end of list
		echo "</ul>";

	?>
</body>
</html>