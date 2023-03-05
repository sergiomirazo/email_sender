<?php
// Email data
$addressee = "example@email.com";
$affair = "affair message";
$body = "<h1>Test Message</h1>
<p>This is a un <b>Test Message</b> to check
the operation of sending emails from the server.</p>";

// configure headers
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

// Send Email
if(mail($addressee,$affair,$body,$headers)){
    echo "Email sent successfully";
}else{
    echo "Error sending email";
}
?>
