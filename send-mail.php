<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Query from $name";

    // Email body
    $body = "You have received a new message from your website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Email headers
    $headers = "From: vinithavinid33@gmail.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h3>Thank you! Your message has been sent.</h3>";
    } else {
        echo "<h3>Sorry, there was a problem sending your message.</h3>";
    }
} else {
    echo "Invalid request.";
}
?>