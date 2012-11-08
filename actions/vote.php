<?php
// Extract all POST data to their own variables
extract($_POST);

// Check to see that a candidate was chosen and that a valid SSN was entered
if(isset($vote) && isset($ssn) && is_valid_ssn($ssn) && !has_voted($ssn)) {
	// Open file
	$file = fopen('../data/votes.txt', 'a+');

	// Write SSN & vote
	fwrite($file, "$ssn,$vote\n");

	// Close file
	fclose($file);

	header('Location:../');
} else {
	header('Location:../?p=form_vote');
}


/**
 * Checks to see if the provided SSN has 9 digits
 */
function is_valid_ssn($ssn) {
	if(strlen($ssn) == 9 && is_numeric($ssn)) {
		return true;
	} else {
		return false;
	}
}

/**
 * Checks to see the the provided SSN has voted
 */
function has_voted($ssn) {
	// Open file
	$lines = file('../data/votes.txt',FILE_IGNORE_NEW_LINES);

	// Loop over votes
	foreach($lines as $line) {
		$data = explode(',',$line);
		if($data[0] == $ssn) {
			return true;
		}
	}

	return false;
}
?>