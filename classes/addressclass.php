<?php
//connect to database class
require("../settings/db_class.php");

/**
*Address class to handle everything address related
*/
/**
 *@author Team EPYC
 *
 */
class address_class extends db_connection
{

	/**
	*method to insert new address 
	*/
	public function add_new_address($a, $b, $c, $d, $e, $f, $g, $h){

		//Write the sql
		$sql = "INSERT INTO `address`(`line 1`, `line 2`, `city`, `state`, `country`, `zipcode`, `passcode`, `submittedby`) VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";
		
		// "INSERT INTO `address` (`pid`,`address`, `submittedby`) VALUES('$a', '$b', '$c')";
		
		//execute the sql
		return $this->db_query($sql);
	}

	/**
	*method for view all address under a user
	*/
	public function view_all_address($a){
		//a query to get all customer
		$sql = "SELECT * FROM `address` WHERE `submittedby`= '$a'";

		//execute the query
		return $this->db_query($sql);
	}

	/**
	*method to view one address base on id
	*takes user if
	*/
	public function view_one_address($pa){
		//a query to get one customer base on id
		$sql = "SELECT * FROM `address` WHERE `pid`=$pa";

		//execute the query
		return $this->db_query($sql);
	}

	/**
	*method to search address
	*takes the search term
	*/
	public function search_a_address($sterm){
		//a query to search address matching term
		$sql = "SELECT * FROM `address` WHERE `passcode` LIKE '%$sterm%'";

		//execute the query
		return $this->db_query($sql);
	}

	/**
	*method to update an address
	*/
	public function update_one_address($a, $b, $c, $d, $e, $f, $g, $h){
		//a query to update address
		$sql = "UPDATE `address` SET `line 1` = '$b',`line 2` = '$c',`city` = '$d',`state` = '$e',`country` = '$f',`zipcode` = '$g',`passcode` = '$h' WHERE `pid` = '$a'";
				
		//execute the query
		return $this->db_query($sql);
	}
}

?>