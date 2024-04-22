<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['pnumber'];
    $message = $_POST['message'];
    
    // Email configuration
    $to = "krunalchristian143@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Not a POST request, redirect back to contact page
    header("Location: contact.html");
}
?>
