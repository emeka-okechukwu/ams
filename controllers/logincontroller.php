<?php
//connect to the login class
require("../classes/loginclass.php");

function adduserctrl($email, $pass, $role){
		//create a new instance of the class
		$insertp = new login_class;

		//run the insert method
		$checkinsert = $insertp->adduser_mthd($email, $pass, $role);
	
		if ($checkinsert) {
			return $checkinsert;
		}else{
			return false;
		}
	
		//return result

}

//function to get login information - takes email
function get_login_fxn($uem){
	//Create an array variable
	$login_array = array();

	//create an instance of the login class
	$login_object = new login_class();

	//run the verify login method using the email
	$login_record = $login_object->verify_login($uem);

	//check if the method worked
	if ($login_record) {
		
		//fetch the from the result
		$one_record = $login_object->db_fetch();
		//assign to array
		$login_array[] = $one_record;
	}
	//return array
	return $login_array;
}

?>