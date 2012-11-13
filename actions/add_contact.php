<?php 
// Put all post data into their own variable
extract($_POST);

// Open data file for appending
$file = fopen('../data/contacts.txt','a+');

// Create a timestamp
$timestamp = time();

// Append entered information to the file
fwrite($file, "$firstname,$lastname,$email,$phone,$timestamp");

// Close the data file
fclose($file);

// Redirect to the list of contacts
header('Location:../?p=contacts');

