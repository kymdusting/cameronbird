<?php

function contactUs(){

    $to      = 'admin@cameronbird.com.au';

    $subject = 'Urgent : From lightiseverything.com.au';
    $stringData = "First Name: " . $_GET['fname'] . "\r\n";
    $stringData = $stringData . "Last Name: " . $_GET['lname'] . "\r\n";
    $stringData = $stringData . "Email: " . $_GET['email'] . "\r\n";
    $stringData = $stringData . "Phone: " . $_GET['phone'] . "\r\n";
    $headers = 'From: ' . $_GET['email'] . " \r\n" .
        'Reply-To: ' . $_GET['email'] . " \r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $stringData, $headers);

    return "Thank you for signing up.";

}

// If being called via ajax, autorun the function

if (isset($_GET['ajax'])) {
    if($_GET['ajax']){ echo contactUs(); }
}
?>