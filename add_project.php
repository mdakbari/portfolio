<?php

include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check if the request method is POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Prepare the SQL statement
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
    $stmt = $pdo->prepare($sql);


    $mail = new PHPMailer(true);
    try {

        $mail -> isSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true;
        $mail -> Username = 'yourmail';
        $mail -> Password = 'yourpassword';
        $mail -> SMTPSecure = 'ssl';
        $mail -> Port = 465;

        $mail -> setFrom($email, $name);
        $mail -> addAddress('yourmail');
        $mail -> isHTML(true);
        $mail -> Subject = $subject;
        $mail -> Body = "<h3>Name: $name <br>Email: $email <br>Subject: $subject <br>Message: $message</h3>";
        // $mail -> send();

        if ($mail->send()) {
            echo "<script>alert('Mail Sent'); window.location.href = '/';</script>"; 
        } else {
            echo "<script>alert('Mail Not Sent'); window.location.href = '/';</script>"; // Redirect after failed send
        }
    }
    catch (Exception $e) {
        echo "<script>alert('Mail could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.location.href = '/';</script>";
    }

    
    // Execute the statement with the provided data 
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);



    // Redirect to the home page after successful submission
    header('Location: /home');
    exit();
}

?>
