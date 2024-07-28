

<?php
session_start();
include 'db.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: /projects');
        exit();
    } else {
        $error_message = 'Invalid username or password. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .alert {
            background-color: #f8d7da;
            color: black;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($error_message)): ?>
            <div class="alert"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>

