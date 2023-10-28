<?php
$to = 'bibybinu07@gmail.com';
$subject = 'Booking Confirmation';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: shoneshaji1891@gmail.com' . "\r\n";

$message = "test message";

echo mail($to, $subject, $message, $headers);

?>
