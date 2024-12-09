<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "viraj@thewebdecor.com";
        $subject = "New Feedback Submission";
        $email_message = "Name: $name\nEmail: $email\nRating: $rating Stars\nFeedback: $message";
        $headers = "From: no-reply@yourdomain.com\r\nReply-To: $email";

        if (mail($to, $subject, $email_message, $headers)) {
            header("Location: thankyou.html");
            exit();
        } else {
            echo "<p style='color: red;'>Failed to send feedback. Please try again later.</p>";
        }
    } else {
        echo "<p style='color: red;'>All fields are required.</p>";
    }
} else {
    header("Location: thankyou.html");
    exit();
}
?>
