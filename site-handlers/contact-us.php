<?php

function contactUs(){

    $to      = 'chris@cameronbird.com.au';
    $subject = 'Urgent : From lightiseverything.com.au';
    $stringData = "Name: " . $_GET['name'] . "\r\n";
    $stringData = $stringData . "User Name: " . $_GET['user-name'] . "\r\n";
    $stringData = $stringData . "Email: " . $_GET['email'] . "\r\n";
    $stringData = $stringData . "Phone: " . $_GET['phone'] . "\r\n";
    $stringData = $stringData . "Address: " . $_GET['address'] . "\r\n";
    $stringData = $stringData . "Suburb: " . $_GET['suburb'] . "\r\n";
    $stringData = $stringData . "State: " . $_GET['state'] . "\r\n";
    $stringData = $stringData . "Postcode: " . $_GET['postcode'] . "\r\n";
    $headers = 'From: ' . $_GET['contact-email'] . " \r\n" .
        'Reply-To: ' . $_GET['contact-email'] . " \r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $stringData, $headers);

    return "Thank you for signing up.";

}

// If being called via ajax, autorun the function

if (isset($_GET['ajax'])) {
    if($_GET['ajax']){ echo contactUs(); }
}
?>
