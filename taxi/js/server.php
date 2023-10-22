<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the text from the POST data
    $textToSend = $_POST['text'];

    // Set the recipient email address
    $to = 'amintlili523@gmail.com'; 

    // Set the subject of the email
    $subject = 'Text from Popup';

    // Compose the email message
    $message = "Text received from the popup:\n\n$textToSend";

    // Set additional headers
    $headers = 'From: webuser@example.com' . "\r\n" .  // Set the sender's email address
               'Reply-To: webuser@example.com' . "\r\n" .  // Set the reply-to email address
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Email could not be sent.';
    }
} else {
    echo 'Invalid request.';
}
?>

