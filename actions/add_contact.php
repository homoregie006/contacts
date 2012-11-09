<?php 
// Extract all POST data to their own variables
extract($_POST);

// Check to see that a candidate was chosen and that a valid phone number was entered
if(isset($vote) && isset($ssn) && is_valid_ssn($ssn) && !has_voted($ssn)) {
	// Open file
	$file = fopen('../data/votes.txt', 'a+');

	// Write SSN & vote
	fwrite($file, "$ssn,$vote\n");

	// Close file
	fclose($file);

	// header('Location:../');
} else {
	header('Location:../?p=form_vote');
}

?>