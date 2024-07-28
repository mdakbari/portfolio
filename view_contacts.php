<?php

include('db.php');

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /');
    exit;
}


// Fetch all contacts from the database
$sql = "SELECT * FROM contacts";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
       
    </style>
</head>
<body>

<div class="container">
    <h1>Contact Information</h1>

    <?php if (count($contacts) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date Submitted</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td data-label="ID"><?php echo htmlspecialchars($contact['id']); ?></td>
                        <td data-label="Name"><?php echo htmlspecialchars($contact['name']); ?></td>
                        <td data-label="Email"><?php echo htmlspecialchars($contact['email']); ?></td>
                        <td data-label="Subject"><?php echo htmlspecialchars($contact['subject']); ?></td>
                        <td data-label="Message"><?php echo htmlspecialchars($contact['message']); ?></td>
                        <td data-label="Date Submitted"><?php echo htmlspecialchars($contact['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No contact information found.</p>
    <?php endif; ?>
</div>

</body>
</html>
