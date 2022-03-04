<!DOCTYPE html>
<html>
<head>
	<title>Add Address</title>
	<meta charset="utf-8">
	<!--CDN Bootstrap and Jquery-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  	<script type="text/javascript" src="../js/address.js"></script>
	<style>
		.container {
  margin-top: 20px;
}
	</style>
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
		    <!--Check for login-->
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		      	<?php echo (isset($_SESSION["user_id"]))? "<a href='../login/logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a>" : " ";?>
		      </li>
		    </ul>
		    <!-- <form class="navbar-form navbar-left" action="updateaddress.php">
		      <div class="form-group">
		        <input type="text" name="searcht" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" name="csearch" class="btn btn-default">Search</button>
		    </form> -->
		  </div>
	</nav> 

	<?php
		//connnect to the controller
		require("../controllers/addresscontroller.php");
		//check if action is an update
		if (isset($_GET['ppid'])) {
			//get address id
			$uuid = $_GET['ppid'];
			//run the function to get one address
			$result = view_one_address_fxn($uuid);
			//store in varible

			$cid = $result[0]['pid'];
			$uline1 = $result[0]['line 1'];
			$uline2 = $result[0]['line 2'];
			$ucity = $result[0]['city'];
			$ustate = $result[0]['state'];
			$ucountry = $result[0]['country'];
			$uzipcode = $result[0]['zipcode'];
			$upasscode = $result[0]['passcode'];
		}
	?>


	
	<!--Form Title-->
	<div class="panel panel-success">
  		<div class="panel-heading">
  			<?php echo (isset($cid))? 'Update Your Address' : 'Add Your Address';?>
  		</div>
  		<div class="panel-body">

			<form role="form" action="addressproc.php">
				<div class="container">
					<div class="panel panel-success">
  	
  					<div class="panel-body">
   						<input required placeholder="Enter your address's unique identifier" type="text" class="form-control" name="upasscode" value="<?php echo (isset($upasscode))? $upasscode: '';?>" id="upasscode">
      					<br>
   					<div id="address">
      					<div class="row">
							<div class="col-md-6">
								<label class="control-label">Address Line 1</label>
								<input class="form-control" required type="text" name="uline1" value="<?php echo (isset($uline1))? $uline1 : '';?>" id="uline1">
							</div>
							<div class="col-md-6">
								<label class="control-label">Address Line 2</label>
								<input class="form-control" required type="text" name="uline2" value="<?php echo (isset($uline2))? $uline2 : '';?>" id="uline2">
							</div>
      					</div>
      					<div class="row">
							<div class="col-md-6">
								<label class="control-label">City</label>
								<input required type="text" class="form-control" name="ucity" value="<?php echo (isset($ucity))? $ucity : '';?>" id="ucity">
							</div>
							<div class="col-md-6"> 
								<label class="control-label">State</label>
								<input required type="text" class="form-control" name="ustate" value="<?php echo (isset($ustate))? $ustate: '';?>" id="ustate">
							</div>
      					</div>
						<div class="row">
							<div class="col-md-6">
								<label class="control-label">Zip code</label>
								<input required type="text" class="form-control" name="uzipcode" value="<?php echo (isset($uzipcode))? $uzipcode: '';?>" id="uzipcode">
							</div>
							<div class="col-md-6">
								<label class="control-label">Country</label>
								<input required type="text" class="form-control" name="ucountry" value="<?php echo (isset($ucountry))? $ucountry : '';?>" id="ucountry">
							</div>
						</div>
						<div class="panel-body">
	  						<button onclick="addressvalidation()" type="submit" class="btn btn-default" name="<?php echo (isset($cid))? 'uupd' : 'ufadd';?>" > <?php echo (isset($cid))? 'Update Address' : 'Add New Address';?></button>
							<input type="hidden" name="conid" value="<?php echo (isset($cid))? $cid : '';?>">
						</div>
   					</div>
				</div>
  				</div>
				</div>
			</form>

  		</div>
	</div>

</body>
</html>
