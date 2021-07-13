<?php
ob_start();

$email_item = $_POST["enquirytype"];

$From = "customercare@kentronigeria.com";

$headers = 'From:'.$From.' '."\r\n";

/* Check all form inputs using check_input function */

$name = $_POST['name'];

$phone_num   = $_POST['phone_num'];

$email    = $_POST['email'];

$optradio    = $_POST['optradio'];

$position    = $_POST['position'];

$exp_year    = $_POST['exp_year'];

$exp_month    = $_POST['exp_month'];

$current_ctc    = $_POST['current_ctc'];

$message   = $_POST['message'];


/* Let's prepare the message for the e-mail */

$subject="Enquiry for KENT Ro Career";
$message = "Hello!

Details as follows:


Personal Details-

First Name: $name
Contact No: $phone_num
Email-ID: $email
Job preference: $optradio
Position: $position
Total Work Experience year: $exp_year
Total Work Experience month: $exp_month
Current CTC: $current_ctc
Message: $message
";



$fixid="customercare@kentronigeria.com";

/* Send the message using mail() function */

mail( $fixid, $subject, $message,$headers);




/* Redirect visitor to the thank you page */



echo "<script type=text/javascript> location.href='../thank-you.php'; </script>";



exit();







?>