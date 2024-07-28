<?php

include 'db.php';


if (!isset($_SESSION['user_id'])) {
    header('Location: /');
    exit;
}

$projectName = isset($project) ? $project['title'] : '';

echo $projectName;

$sql = "DELETE FROM projects WHERE title = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$projectName]);

header('Location: /projects');






?>