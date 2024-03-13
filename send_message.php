<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $budget = $_POST["budget"];
    $project = $_POST["project"];

    // Send email to your own email address
    $to = "chandanyadavvasu@gmail.com";
    $subject = "Email From VasuTheme";
    $body = "Name: $name\nEmail: $email\nBudget: $budget\nProject Type: $project\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully. We will get back to you soon!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
