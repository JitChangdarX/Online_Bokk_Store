<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['mail'];

    // Validate input
    if (!empty($name) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = "New Message from Contact Form";
        $body = "Name: $name\nMessage: $message\nEmail: $email";
        $to = "jitchangdar7@gmail.com"; // Add your email address here
        $headers = "From: $name <$email>\r\n" .
            "Reply-To: $email\r\n" .
            "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            // Success message
            echo "<div class='message-container success'>";
            echo "<h2>Email Sent Successfully!</h2>";
            echo "<p>Thank you, <strong>$name</strong>. Your message has been sent. We will get back to you shortly.</p>";
            echo "<a href='/home/index.php'>Return to Home</a>";
            echo "</div>";
        } else {
            // Error message
            echo "<div class='message-container error'>";
            echo "<h2>Error Sending Email</h2>";
            echo "<p>We encountered an issue while sending your email. Please try again later or contact us directly at <a href='mailto:support@example.com'>support@example.com</a>.</p>";
            echo "</div>";
        }
    } else {
        // Validation error message
        echo "<div class='message-container error'>";
        echo "<h2>Invalid Input</h2>";
        echo "<p>Please check your details and try again. Make sure all fields are filled correctly.</p>";
        echo "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Status</title>
    <style>
        /* General Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('mail.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        /* Message Container Styling */
        .message-container {
            max-width: 600px;
            margin: 5rem auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .message-container h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .message-container p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .message-container a {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .message-container a:hover {
            background-color: #0056b3;
        }

        /* Success Message Styling */
        .message-container.success {
            border-left: 6px solid #28a745;
        }

        /* Error Message Styling */
        .message-container.error {
            border-left: 6px solid #dc3545;
        }
    </style>
</head>

<body>
</body>

</html>