<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);

    $to = "retreatwinterfell@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $message = "You have received a new message from your website contact form.\n\n" .
               "Name: $name\n" .
               "Phone Number: $number";

    $headers = "From: no-reply@yourdomain.com\r\n" .
               "Reply-To: $to\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for reaching out! We'll contact you soon.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
