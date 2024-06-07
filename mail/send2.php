<?php
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    $subject = htmlspecialchars($_POST['subject']);

    // if ($email) {
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->Username = "johnrayglitse@gmail.com"; // 
            $mail->Password = "djquvzncvtblnoyk"; // djquvzncvtblnoyk

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress("johnrayglitse@gmail.com"); 
            $mail->addReplyTo("johnrayglitse@gmail.com");

            //Content
            $mail->Subject = $subject;
            $mail->Body = $message;

            if ($mail->send()) {
                $status = "success";
                $response = "Email sent successfully.";
            } else {
                $status = "error";
                $response = "Email could not be sent.";
            }
        } catch (Exception $e) {
            $status = "error";
            $response = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $status = "error";
        $response = "Invalid email address.";
    // }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET IN TOUCH</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            position: 'center',
            icon: '<?php echo $status; ?>',
            title: '<?php echo $response; ?>',
            showConfirmButton: false, 
            timer: 3000
        });

    });
    </script>
</body>
</html>
