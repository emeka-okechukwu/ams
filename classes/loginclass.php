<?php
//connect to database class
require("../settings/db_class.php");

/**
*Login class to handle everything login related
*/
/**
 *@author David Sampah
 *
 */
class login_class extends db_connection
{

	//method for insert
	public function adduser_mthd($email, $pass, $role){

		$hashedPassword = password_hash($pass, PASSWORD_BCRYPT);
		//write the query
		$sql = "INSERT into `ulogin`(`uemail`, `upass`, `urole`) VALUES('$email', '$hashedPassword', '$role')";

		//run the query
		return $this->db_query($sql);

	}

	/**
	*method for login informaton 
	*/
	public function verify_login($um){
		//a query to get all login information base on email
		$sql = "SELECT * FROM ulogin WHERE uemail='$um'";

		//execute the query
		return $this->db_query($sql);
	}

}

?>