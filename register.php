<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $number = isset($_POST['number']) ? htmlspecialchars(trim($_POST['number'])) : '';
    $experience = isset($_POST['experience']) ? htmlspecialchars(trim($_POST['experience'])) : '';
    $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';

    // Validate required fields
    if (!empty($name) && !empty($number)) {
        // Send email with form data
        $to = "viraj@thewebdecor.com";
        $subject = "New Astrologer Registration";
        $message = "Name: $name\n" .
                   "Mobile Number: $number\n" .
                   "Experience: $experience\n" .
                   "Address: $address";
        $headers = "From: no-reply@future7.in\r\n" .
                   "Reply-To: no-reply@future7.in";

        if (mail($to, $subject, $message, $headers)) {
            // Redirect to the thank you page
            header("Location: thankyou.html");
            exit();
        } else {
            echo "<p style='color: red;'>Failed to send email. Please try again later.</p>";
        }
    } else {
        // Handle errors if required fields are empty
        echo "<p style='color: red;'>Name and Mobile Number are required fields.</p>";
    }
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: form-page.php"); // Replace with the actual form page URL
    exit();
}
?>