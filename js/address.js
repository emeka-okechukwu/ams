//function to validate form
function addressvalidation(){

	//grab form data
	var ucountry = document.getElementById('ucountry').value;

	//define regex for name and phone
	var ucountry = /[aA-zZ]/gm;

	//test for name
	if (!namereg.test(ucountry)) {

		//prevent form submission and alert error
		event.preventDefault();
		alert('Invalid Country - only text allowed');
	}else{
		//all good. alert success
		alert('Adding address...');
	}

}