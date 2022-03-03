<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<title>Register</title>
	<meta charset="utf-8">
	<!--CDN Bootstrap and Jquery-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="../js/contact.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--Custom CSS-->
	<style type="text/css">
		body {
			color: #999;
			background: #f5f5f5;
		}
		.form-control, .form-control:focus, .input-group-addon {
			border-color: #e1e1e1;
			border-radius: 0;
		}
		.signup-form {
			width: 390px;
			margin: 0 auto;
			padding: 30px 0;
		}
		.signup-form h2 {
			color: #636363;
			margin: 0 0 15px;
			text-align: center;
		}
		.signup-form .lead {
			font-size: 14px;
			margin-bottom: 30px;
			text-align: center;
		}
		.signup-form form {		
			border-radius: 1px;
			margin-bottom: 15px;
			background: #fff;
			border: 1px solid #f3f3f3;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}
		.signup-form .form-group {
			margin-bottom: 20px;
		}
		.signup-form label {
			font-weight: normal;
			font-size: 13px;
		}
		.signup-form .form-control {
			min-height: 38px;
			box-shadow: none !important;
			border-width: 0 0 1px 0;
		}	
		.signup-form .input-group-addon {
			max-width: 42px;
			text-align: center;
			background: none;
			border-width: 0 0 1px 0;
			padding-left: 5px;
		}
		.signup-form .btn {        
			font-size: 16px;
			font-weight: bold;
			border-radius: 3px;
			border: none;
			min-width: 140px;
			outline: none !important;
		}
		.signup-form .btn:hover, .signup-form .btn:focus {
			background: #179b81;
		}
		.signup-form a {
			text-decoration: none;
		}	
		.signup-form a:hover {
			text-decoration: underline;
		}
		.signup-form .fa {
			font-size: 21px;
		}
		.signup-form .fa-paper-plane {
			font-size: 17px;
		}
		.signup-form .fa-check {
			color: #fff;
			left: 9px;
			top: 18px;
			font-size: 7px;
			position: absolute;
		}
	</style>

</head>
<body>
	<!--Sign Up Form-->
	<div class="signup-form">	
		<form action="registerproc.php" method="post">
			<h2>Create Account</h2>
			<p class="lead">It's free and hardly takes more than 30 seconds.</p>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
					<input type="email" class="form-control" name="umail" placeholder="Email Address" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" class="form-control" name="upass" placeholder="Password" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-lock"></i>
						<i class="fa fa-check"></i>
					</span>
					<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
				</div>
			</div>
			</br>
			<p>I'll be using this platform as a</p>
			</br>
			<div class="form-group">
				<div class="input-group">
				<span class="input-group-addon"><input type="radio" name="role" value="RU" checked="checked"><br></span>Regular User
				<span class="input-group-addon"><input type="radio" name="role" value="SP"> <br></span>Service Provider
				</div>
			</div>    
			<div class="form-group">
				<button type="submit" name="uregister" class="btn btn-primary btn-block btn-lg">Sign Up</button>
			</div>
			<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
		</form>
		<div class="text-center">Already have an account? <a href="../index.php">Login here</a>.</div>
	</div>

<!-- <div class="login-form">
	    <form action="registerproc.php" method="">
	        <h2 class="text-center">Register</h2>    
	        <div class="form-group">
	            <input type="Email" class="form-control" placeholder="Email" required="required" name="umail">
	        </div>
	        <div class="form-group">
	            <input type="password" class="form-control" placeholder="Password" required="required" name="upass">
	        </div>
	        <div class="form-group">
	            <button type="submit" name="uregister" class="btn btn-primary btn-block">Register</button>
	        </div>
	               
	    </form>
		<p class="text-center"><a href="spregister.php">Are You A Service Provider? Click Here</a></p>
	    <p class="text-center"><a href="../index.php">Back To Home</a></p>
	</div> -->
	
</body>
</html>