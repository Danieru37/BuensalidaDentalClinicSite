<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['Name']);
        $email = htmlspecialchars($_POST['Email']);
        $date = htmlspecialchars($_POST['date']);
        $message = htmlspecialchars($_POST['Message']);

        $to = "doczars.bdc@gmail.com";
        $subject = $name;
        $body = "Name: $name\nEmail: $email\nAppointment Date: $date\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
?>
