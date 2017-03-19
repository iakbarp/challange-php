<?php

	/* Your own simple template engine
	 * it's good to separate php logic from html
	 * that's why using template engine is considered best practice
	 * */
	
	$now = date('Y-m-d'); // get today's date
	$html = file_get_contents('workshop.html'); // get html content from other file
	$html = str_replace('{{date}}', $now, $html); // replace {{date}} with our $now variable
	
	echo $html;
?>
