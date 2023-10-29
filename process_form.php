<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    $to = "jiteshsandil@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission. We will be in contact with you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>