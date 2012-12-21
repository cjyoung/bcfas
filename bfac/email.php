<?php
	$name = $_POST['name'];
	$company = $_POST['company'];
	$telephone1 = $_POST['telephone1'];
	$telephone2 = $_POST['telephone2'];
	$telephone3 = $_POST['telephone3'];
	$email = $_POST['email'];
	$facility = $_POST['facility'];
	$date = $_POST['date'];
	$time1 = $_POST['time1'];
	$time2 = $_POST['time2'];
	$time3 = $_POST['time3'];
	$time4 = $_POST['time4'];
	$attendees = $_POST['attendees'];
	$tables = $_POST['tables'];
	$tabletype = $_POST['tabletype'];
	$tablecloth = $_POST['tablecloth'];
	$tablecloths = $_POST['tablecloths'];
	$chairs = $_POST['chairs'];
	$other1 = $_POST['other1'];
	$other2 = $_POST['other2'];
	$other3 = $_POST['other3'];
	$other4 = $_POST['other4'];
	$other5 = $_POST['other5'];
	$other6 = $_POST['other6'];
	$other7 = $_POST['other7'];
	$other8 = $_POST['other8'];
	$other9 = $_POST['other9'];
	$other10 = $_POST['other10'];
	$other11 = $_POST['other11'];
	$other12 = $_POST['other12'];
	$other13 = $_POST['other13'];
	$other14 = $_POST['other14'];
	$other15 = $_POST['other15'];
	$other16 = $_POST['other16'];
	$notes = $_POST['notes'];
	
	$formcontent=" 
Name: $name
Company Name: $company

Phone Number: $telephone1 - $telephone2 - $telephone3

Email: $email

Facility Requested: $facility

Potential Date: $date
Potential Time: $time1 $time2 to $time3 $time4

Number of Attendees: $attendees

Tables: $tables
Table Type: $tabletype

Table Cloths: $tablecloth
Table Cloth Type: $tablecloths

Chairs: $chairs

Other Equipment Request: $other1 $other2 $other3 $other4 $other5 $other6 $other7 $other8 $other9 $other10 $other11 $other12 $other13 $other14 $other15 $other16

Additional Notes: $notes
		";
	
	$recipient = "mallen@bcfas.org";
	
	$subject = "Rental Request Form";
	
	$mailheader = "From: $email \r\n";
	
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	
	echo "Thank You!
	Please hit your browsers back button to return to the previous page.
	";
?>