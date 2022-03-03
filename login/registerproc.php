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
if (isset($_POST['uregister'])) {
	
	//grab form details 
	$email = $_POST['umail'];
    $pass = $_POST['upass'];

    if($_POST['role'] == "RU"){
        $role = 1;

    }else{
        $role = 2;
    }

    if ($pass === $_POST["cpass"]) {
        //call function to add
        $ret =  adduserctrl($email, $pass, $role);
        //echo result
        if ($ret) {
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            header('Location: ../index.php');
        } else{
            echo "<div class='form'><h3>Registration Failed: Please check your details again.</h3><br/>Click here to try again <a href='adduser.php'>Register Again</a></div>";
        }
     } else{
            echo "Passwords do not match";
     }
    
}

?>