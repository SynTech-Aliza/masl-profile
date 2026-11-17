<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$contactStatus = '';
$contactStatusType = '';

if (isset($_POST['sent'])) {

    $name = $_POST['name'] ?? '';
    $emailaddress = $_POST['emailaddress'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {

        // SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mariaalizalomugdang@gmail.com';
        $mail->Password   = 'cavz ifta epte czxw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom(
            'mariaalizalomugdang@gmail.com',
            'My Personal Profile'
        );

        // Receiver
        $mail->addAddress(
            'mariaalizalomugdang@gmail.com',
            'Ma. Aliza Lomugdang'
        );

        // Visitor email
        $mail->addReplyTo(
            $emailaddress,
            $name
        );

        // Email format
        $mail->isHTML(true);

        $mail->Subject = 'New Message from Your Website';

        $mail->Body = '
            <h2>New Website Message</h2>

            <p>
                <strong>Name:</strong> ' .
                htmlspecialchars($name) .
            '</p>

            <p>
                <strong>Email:</strong> ' .
                htmlspecialchars($emailaddress) .
            '</p>

            <hr>

            <p>
                <strong>Message:</strong>
            </p>

            <p>' .
                nl2br(htmlspecialchars($message)) .
            '</p>
        ';

        $mail->send();

        $contactStatus = 'Email sent successfully. Thank you for reaching out!';
        $contactStatusType = 'success';

    } catch (Exception $e) {
        $contactStatus = 'Email could not be sent. Please try again.';
        $contactStatusType = 'error';
    }
}
?>