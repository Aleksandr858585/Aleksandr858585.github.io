<?php
$field_email = '';// откуда будут слаться письма
$email = stripslashes($_POST['email']);
$mail_to = ''; // куда будут слаться письма
$subject = 'Заявка с сайта:';

$body_message = '
<html>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <body> 
        <p>
            Email: '.$email.' <br>
        </p>
    </body> 
</html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status=mail($mail_to, $subject, $body_message, $headers);
?>