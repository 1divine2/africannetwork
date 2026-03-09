<?php

if(!empty($_POST['mail'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "<$name>, $email";

    sendMail($to, $subject, $message); 
}

function sendMail($to, $subject, $message) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <sample@gmail.com>';

    mail($to, $subject, $message, $headers);
}