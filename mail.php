<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'goldenkokchan@gmail.com';
    $mail->Password   = 'jjxgtvsafkbjefls';
    $mail->SMTPSecure = 'tls'; // Change from 'ssl' to 'tls'
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('goldenkokchan@gmail.com', 'Golden Dragon');
    $mail->addAddress($_POST["email"]);
    $mail->addReplyTo($_POST["email"], $_POST["first_name"]);

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Reservering";
    $mail->Body    = "Beste " . $_POST["first_name"] . ",<br><br>";
    $mail->Body    .= "Bedankt voor uw reservering bij Golden Dragon. Hier zijn de details:<br><br>";
    $mail->Body    .= "<b>Naam:</b> " . $_POST["first_name"] . " " . $_POST["middle_name"] . " " . $_POST["last_name"] . "<br>";
    $mail->Body    .= "<b>Telefoonnummer:</b> " . $_POST["phone"] . "<br>";
    $mail->Body    .= "<b>Emailadres:</b> " . $_POST["email"] . "<br>";
    $mail->Body    .= "<b>Aantal personen:</b> " . $_POST["number_of_people"] . "<br>";
    $mail->Body    .= "<b>Datum:</b> " . $_POST["reservation_datetime"] . "<br>";
    $mail->Body    .= "<b>Tijd:</b> " . $_POST["tijd"] . "<br><br>";
    $mail->Body    .= "Wij hopen u snel te zien in ons restaurant!<br><br>";
    $mail->Body    .= "Met vriendelijke groet,<br>Golden Dragon";

    try {
        $mail->send();

        header("Location: confirmation.php?" . http_build_query([
            'name' => $_POST["first_name"],
            'phone' => $_POST["phone"],
            'email' => $_POST["email"],
            'num_people' => $_POST["number_of_people"],
            'date' => $_POST["reservation_datetime"],
            'time' => $_POST["tijd"]
        ]));
        exit();
    } catch (Exception $e) {
        echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
    }
} else {
    echo 'Form not submitted.';
}
?>
