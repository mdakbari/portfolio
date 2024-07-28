<?php
include 'db.php';

    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: /');
        exit;
    }
    
// Fetch all projects from the database
try {
    $sql = "SELECT * FROM projects";
    $stmt = $pdo->query($sql);
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin Dashboard">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Admin Dashboard</h1>
    <a href="/add_project" class="btn btn-primary mb-3">Add New Project</a>
    <a href="/view_contacts" class="btn btn-primary mb-3">Contact</a>
    <a href="/logout" class="btn btn-primary mb-3">Logout</a>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Frontend</th>
                    <th>Backend</th>
                    <th>Img</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($projects)): ?>
                    <?php foreach ($projects as $project): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($project['title']); ?></td>
                            <td><?php echo htmlspecialchars($project['project_type']); ?></td>
                            <td><?php echo htmlspecialchars($project['frontend_technologies']); ?></td>
                            
                            <td><?php echo htmlspecialchars($project['backend_technologies']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($project['main_image']); ?>" alt="Main Image" style="width: 50px;"></td>
                            <td>
                                <a href="/edit/<?php echo htmlspecialchars($project['title']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/delete_project/<?php echo htmlspecialchars($project['title']);?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No projects found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
