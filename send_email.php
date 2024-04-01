<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Here you would usually check the data for any errors, and then send the email
    $to = "astrax111@gmail.com"; // Your email address
    $subject = "New message from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    // PHP function to send the mail
    mail($to, $subject, $email_content, $headers);
    
    // Redirect to a thank-you page or display a success message
    // header("Location: thank_you.html");
    echo "Thank You! Your message has been sent.";
}
?>
