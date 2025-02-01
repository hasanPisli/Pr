<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merrni të dhënat e formës
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validoni të dhënat e email-it
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        die("Email i pavlefshëm.");
    }

    // Caktoni email-in dhe mesazhin
    $to = "hasanpisli3@gmail.com"; // Vendosni email-in tuaj
    $subject = "Mesazh nga portofolio";
    $body = "Emri: $name\nEmail: $email\nMesazhi:\n$message";
    $headers = "From: $email";
    
    // Dërgoni email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesazhi u dërgua me sukses!";
    } else {
        echo "Ka ndodhur një gabim. Ju lutemi provoni më vonë.";
    }
}
?>
