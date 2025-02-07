<?php
// Configuration
define("ADMIN_EMAIL", "greta48.dwwm@gmail.com");
define("ROBOT_CHECK", 7); // 5 + 2 = 7

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $captcha = intval($_POST["captcha"]);

    if (!$email || $captcha !== ROBOT_CHECK) {
        exit;
    }

    $subject = "Confirmation d'inscription - Maintenance";
    $message = "Bonjour,\n\nVotre demande a bien été prise en compte. Nous vous informerons dès que le site sera de nouveau en ligne.\n\nMerci de votre patience.\n\nL'équipe de support.";
    $headers = "From: noreply@votresite.com\r\n";
    $headers .= "Reply-To: noreply@votresite.com\r\n";
    $headers .= "Cc: " . ADMIN_EMAIL . "\r\n";

    mail($email, $subject, $message, $headers); // Added the missing semicolon

    echo "<script>alert('Votre demande a bien été prise en compte !'); window.location.href='index.php';</script>";
}
?>



