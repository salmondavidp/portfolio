<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $to = "davidpotagoli17@gmail.com"; // your email

    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST['subject']));
    $message = strip_tags(trim($_POST['message']));

    if(empty($name) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        http_response_code(400);
        echo "Please complete the form correctly.";
        exit;
    }

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if(mail($to, $subject, $email_content, $headers)){
        echo "OK"; // success
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong. Your message was not sent.";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
