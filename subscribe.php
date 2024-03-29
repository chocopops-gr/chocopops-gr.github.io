<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subscriber_email = $_POST['email'];
    $to = $subscriber_email; // Send email to the subscriber
    $subject = "Subscription Confirmation";
    $message = "Thank you for subscribing!";
    $headers = "From: chocopops.gr@gmail.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Display success message
        echo "<script>alert('Εγγραφήκατε με επιτυχία! Σας ευχαριστούμε πολύ!');</script>";
    } else {
        // Display error message
        echo "<script>alert('Κάποιο πρόβλημα προέκυψε... Δοκιμάστε ξανα!');</script>";
    }
}
?>
