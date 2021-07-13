<?php
ob_start();

$email_item = $_POST["enquirytype"];

$From = "customercare@kentronigeria.com";

$headers = 'From:'.$From.' '."\r\n";

/* Check all form inputs using check_input function */

$name = $_POST['name'];

$contact   = $_POST['contact'];

$email    = $_POST['email'];


/* Let's prepare the message for the e-mail */

$subject="Enquiry for KENT Grand Star";
$message = "Hello!

Details as follows:


Personal Details-

First Name: $name
Contact No: $contact
Email-ID: $email
";



$fixid="customercare@kentronigeria.com";

/* Send the message using mail() function */

mail( $fixid, $subject, $message,$headers);




/* Redirect visitor to the thank you page */



echo "<script type=text/javascript> location.href='../thank-you.php'; </script>";



exit();







?>