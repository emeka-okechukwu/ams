<?php
//for header redirection
ob_start();

//start session - needed to capture login information 
session_start(); 

//connnect to the controller
require("../controllers/logincontroller.php");

//admin login
//admin@gmail.com
//pass:12345

//standard login
//standard@gmail.com
//pass:54321

//check if login button was clicked 
if (isset($_POST['ulogin'])) {
	
	//grab form details 
	$lemail = $_POST['umail'];
	$lpass = $_POST['upass'];

	//check if email exist
	$check_login = get_login_fxn($lemail);

	if ($check_login) {
		//email exist, continue to password
		//get password from database
		$hash = $check_login[0]['upass'];

		//verify password
		if (password_verify($lpass, $hash)) 
		{
				//set session
				$_SESSION["user_id"] = $check_login[0]['uid'];
				$_SESSION["user_role"] = $check_login[0]['urole'];
				$_SESSION["user_email"] = $check_login[0]['uemail'];

				//redirection to home page
				if($_SESSION["user_role"] == 1){
					header('Location: ../ruindex.php');
				}else{
					header('Location: ../spindex.php');
				}
				
				//to make sure the code below does not execute after redirection
				exit;
		} else 
		{
				//echo appropriate error
			    echo 'incorrect username or password';
		}

	} else{
		//echo appropriate error
		echo "incorrect username or password";
	}
}

?>