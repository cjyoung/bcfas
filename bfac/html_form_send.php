<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "jessicad@bcfas.org";
     
    $email_subject = "Rental Request from Website";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['facility']) ||
		!isset($_POST['datemonth']) ||
		!isset($_POST['dateday']) ||
		!isset($_POST['dateyear'])
		) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $facility = $_POST['facility']; // required
	$datemonth = $_POST['datemonth']; // required
	$dateday = $_POST['dateday']; // required
	$dateyear = $_POST['dateyear']; // required
	$starttime = $_POST['starttime']; // not required
	$startap = $_POST['startap']; // not required
	$endtime = $_POST['endtime']; // not required
	$endap = $_POST['endap']; // not required
	$attendees = $_POST['attendees']; // not required
	$tablesyes = $POST_['tablesyes']; // not required
	$tablesno = $POST_['tablesno']; // not required
	$tabletype = $POST_['tabletype']; // not required
	$tablecloths = $POST_['tablecloths']; // not required
	$chairs = $POST_['chairs']; // not required
	$other = $POST_['other']; // not required
	$coffeeurn = $POST_['coffeeurn']; // not required
	$coffee = $POST_['coffee']; // not required
	$flipstand = $POST_['flipstand']; // not required
	$flipchart = $POST_['flipchart']; // not required
	$projectorstand = $POST_['projectorstand']; // not required
	$portablescreen = $POST_['portablescreen']; // not required
	$lecturn = $POST_['lecturn']; // not required
	$smallpa = $POST_['smallpa']; // not required
    $largepa = $POST_['largepa']; // not required
	$tv = $POST_['tv']; // not required
	$overhead = $POST_['overhead']; // not required
	$largetheaterscreen = $POST_['largetheaterscreen']; // not required
	$musicstand = $POST_['musicstand']; // not required
	$schimmel = $POST_['schimmel']; // not required
	$yamaha = $POST_['yamaha']; // not required
	$clavinova = $POST_['clavinova']; // not required
	$notes = $POST_['notes']; //not required
	
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Facility: ".clean_string($facility)."\n"; 
	$email_message .= "Date: ".clean_string($datemonth).clean_string($dateday).clean_string($dateyear)."\n";
	$email_message .= "Time: ".clean_string($starttime).clean_string($startap).clean_string($endtime).clean_string($endap)."\n";
	$email_message .= "Number of Attendees: ".clean_string($attendees)."\n";
	$email_message .= "Tables: ".clean_string($tables)."\n";
    $email_message .= "Table Cloths: ".clean_string($tablecloths)."\n";
	$email_message .= "Chairs: ".clean_string($chairs)."\n";
	$email_message .= "Other: ".clean_string($others)."\n" .clean_string($coffeeurn)."\n" .clean_string($coffee)."\n" .clean_string($flipstand)."/n";
	$email_message .= "Additional Notes: " .clean_string($notes)."/n";
	
    
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- place your own success html below -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
die();
?>