<pre><?php print_r($_POST); ?></pre>
<pre><?php print_r($_FILES); ?></pre>
<?php
// Put all post data into their own variable
extract($_POST);

// (1) Verify that all info was provided
// (2) Verify that a valid phone number was provided

	// Open data file for appending
	$file = fopen('../data/contacts.txt','a+');
	
	// Create a timestamp
	$timestamp = time();
	
	// Append entered information to the file
	fwrite($file, "$firstname,$lastname,$email,$phone,$timestamp");
	
	// Close the data file
	fclose($file);
	
	// Check to see if an image was uploaded
	if(count($_FILES) > 0) {
	
		// Create the name of the newly uploaded image
		$type = $_FILES['picture']['type'];
		$type_parts = explode('/',$type);
		$ext = $type_parts[1];
		$file_name = $firstname.'.'.$lastname.'.'.$ext;
		echo "NEW FILE NAME: $file_name";
		$dest = "../data/pictures/$file_name";
		move_uploaded_file($_FILES['picture']['tmp_name'], $dest);
	}		
	
	// Redirect to the list of contacts
//	header('Location:../?p=contacts');


/**
 * Validates that a phone number is numeric and
 * has 10 digits
 * @param String $phone
 * @return True if the number is valid, false otherwise
 */

function is_valid_phone($phone) {
	if(strlen($phone) == 10 && is_numeric($phone)) {
		return true;
	} else {
		return false;
	}
}
?>

