<?php

use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    public static function prepare($to, $subject, $body)
    {
        $mail = new PHPMailer;

        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($to);

        $mail->isSMTP();
        $mail->Mailer = "smtp";
        $mail->isHTML(true);
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->Subject = $subject;
        //$mail->Body = $body;
        $mail->msgHTML($body);

        return $mail;
    }

    public static function send($to, $subject, $body)
    {
        if (!self::prepare($to, $subject, $body)->send()) {
            echo "Error while sending Email.";
        } else {
            echo "Email sent successfully.";
        }
    }
}
