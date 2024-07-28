<?php

include('db.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Prepare the SQL statement
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);

    header('Location: /home');
    exit();
}

?>
