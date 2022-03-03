<?php
//connect to the address class
require("../classes/addressclass.php");


//insert address function
function insert_address_fxn($a, $b, $c, $d, $e, $f, $g, $h){
	//create an instance of address class
	$newcon_object = new address_class();
	
	//run the add address method
	$insertcon = $newcon_object->add_new_address($a, $b, $c, $d, $e, $f, $g, $h);
	if ($insertcon) {
		//return query result (boolean)
		return $insertcon;
	}else{
		return false;
	}
}

//search address function - takes the search term
function search_address_fxn($stm){
	//Create an array variable
	$address_array = array();

	//create an instance of the address class
	$address_object = new address_class();

	//run the search address method
	$address_records = $address_object->search_a_address($stm);

	//check if the method worked
	if ($address_records) {
		
		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $address_object->db_fetch()) {
			
			//Assign each result to the array
			$address_array[] = $one_record;
		}
	}
	//return the array
	return $address_array;
}


//view all address function
function view_all_address_fxn($a){
	//Create an array variable
	$address_array = array();

	//create an instance of the address class
	$address_object = new address_class();

	//run the view all address method
	$address_records = $address_object->view_all_address($a);

	//check if the method worked
	if ($address_records) {
		
		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $address_object->db_fetch()) {
			//Assign each result to the array
			$address_array[] = $one_record;
		}
	}
	//return the array
	return $address_array;
}


//view one address function - takes the id
function view_one_address_fxn($pin){
	//Create an array variable
	$address_array = array();

	//create an instance of the address class
	$address_object = new address_class();

	//run the view one address method
	$address_record= $address_object->view_one_address($pin);

	//check if the method worked
	if ($address_record) {
		
		//fetch the result
		$one_record = $address_object->db_fetch();
		//assign to array
		$address_array[] = $one_record;
	}
	//return array
	return $address_array;
}

//update a address function
function update_address_fxn($a, $b, $c, $d, $e, $f, $g, $h){
	//create an instance of the address class
	$address_object = new address_class();

	//run the update one contacat method
	$update_address = $address_object->update_one_address($a, $b, $c, $d, $e, $f, $g, $h);

	//check if method worked
	if ($update_address) {
		
		//return query result (boolean)
		return $update_address;
	}else{
		//return false
		return false;
	}
}