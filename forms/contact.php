<?php
function sendEmail($body){
    $to        = "amin.anconnu@gmail.com";
    $title     = "Message from the profilo .. !";
    $header    = "From: aminrlazreg@gmail.com\r\nReply-To: aminrlazreg@hotmail.com";
    $mail_sent = mail($to, $title, $body, $header);
    echo $mail_sent ? 'OK' : 'Error';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Create email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message";

    // Send the email using your function
    sendEmail($email_content);
}
?>
