<?php
    $to = 'shanvijikaran@gmail.com';
    $subject = 'Message From Website';
    $message = 'Hello World';

    $s = mail($to,$mail_subject,$email_body,$header);
    if($s){
        echo "Success";
    } else {
        echo "Failed";
    }
?>