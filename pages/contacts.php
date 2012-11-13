<?php 
// Read all the lines from the data file
$lines = file('data/contacts.txt',FILE_IGNORE_NEW_LINES) ;

// Loop over the lines
foreach($lines as $line) {
	// At this point, $line contains an entire line,
	// with information sperated by commas (CSV data)
	// Spilit the line's data into pieces, which are
	// currently seperated by commas
	$contact_info = explode(',' ,$line);
	
	$firstname = "$contact_info[0]";
	$lastname = $contact_info[1];
	$name = "$firstname $lastname";
	
	$email = "$contact_info[2]";
	$phone = "$contact_info[3]";
	$area_code= substr("$phone", 0,3);
	$next3= substr("$phone", 3,3);
	$last4= substr("$phone", 6,4);
	?>
	<div class="contact">
		<img src="http://placehold.it/100x100" alt="avatar" />
		<h3><?php echo $name; ?></h3>
		<p class="email"> <a class="btn btn-primary" href="mailto:<?php echo $email; ?>"><?php echo $email; ?> </a>
		<p class="phone"><?php echo "($area_code) $next3-$last4"; ?>
	</div>
<?php }?>