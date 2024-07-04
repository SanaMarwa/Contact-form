<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Replace with your email address
    $headers = "From: " . $email . "\r\n" .
        "Reply-To: " . $email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>
