<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /');
    exit;
}

// Initialize variables with default values
$remove_old_image = isset($_POST['remove_old_image']) ? $_POST['remove_old_image'] : 'no';

// Update project details if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $project_type = $_POST['project_type'];
    $frontend_technologies = $_POST['frontend_technologies'];
    $backend_technologies = $_POST['backend_technologies'];
    $description = $_POST['description'];
    $website_url = $_POST['website_url'];
    $display_order = $_POST['display_order'];

    try{
        
    // Check if a new main image is uploaded
    if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] == UPLOAD_ERR_OK) {
        $main_image = 'uploads/' . basename($_FILES['main_image']['name']);
        move_uploaded_file($_FILES['main_image']['tmp_name'], $main_image);

        // Update project details including the main image
        $sql = "UPDATE projects SET title = ?, description = ?, project_type = ?, frontend_technologies = ?, backend_technologies = ?, website_url = ?, main_image = ?, display_order = ? WHERE title = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $description, $project_type, $frontend_technologies, $backend_technologies, $website_url, $main_image, $display_order, $_POST['original_title']]);
    } else {
        // Update project details without changing the main image
        $sql = "UPDATE projects SET title = ?, description = ?, project_type = ?, frontend_technologies = ?, backend_technologies = ?, website_url = ?, display_order = ? WHERE title = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $description, $project_type, $frontend_technologies, $backend_technologies, $website_url, $display_order, $_POST['original_title']]);
    }

    // Get the project ID to associate images
    $sql = "SELECT id FROM projects WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title]);
    $project = $stmt->fetch();
    $project_id = $project['id'];

    // Handle additional images
    if ($remove_old_image == 'yes') {
        // Delete old images associated with the project
        $sql = "DELETE FROM project_images WHERE id IN (SELECT project_image_id FROM project_project_image WHERE project_id = ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$project_id]);
    }
    if (!empty($_FILES['additional_images']['name'][0])) {
        foreach ($_FILES['additional_images']['name'] as $key => $image) {
            $image_path = 'uploads/' . basename($image);
            move_uploaded_file($_FILES['additional_images']['tmp_name'][$key], $image_path);

            // Insert image data into the database
            $sql = "INSERT INTO project_images (image) VALUES (:image)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':image' => $image_path]);

            $image_id = $pdo->lastInsertId();

            // Associate image with project
            $sql = "INSERT INTO project_project_image (project_id, project_image_id) VALUES (:project_id, :image_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':project_id' => $project_id,
                ':image_id' => $image_id
            ]);
        }
    }

    // Redirect after processing
    header('Location: /projects');
    exit;

    
    } 
    catch (PDOException $e) {
        if($e->getcode() == 23000){
            echo "<script>alert('Duplicate display order value detected. Please choose a different order.');</script>";
        }
        else{
            echo "<script>alert('An error occurred. Please try again.');</script>";
        }
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Edit Project">
    <link href="assets/images/md_fav.png" rel="shortcut icon">
    <title>Edit Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Project</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="original_title" value="<?php echo htmlspecialchars($project['title']); ?>">
        <div class="form-group">
            <label for="title">Project Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($project['title']); ?>" required>
        </div>
        <div class="form-group">
            <label for="project_type">Project Type</label>
            <input type="text" class="form-control" id="project_type" name="project_type" value="<?php echo htmlspecialchars($project['project_type']); ?>" required>
        </div>
        <div class="form-group">
            <label for="frontend_technologies">Frontend Technologies</label>
            <input type="text" class="form-control" id="frontend_technologies" name="frontend_technologies" value="<?php echo htmlspecialchars($project['frontend_technologies']); ?>" required>
        </div>
        <div class="form-group">
            <label for="backend_technologies">Backend Technologies</label>
            <input type="text" class="form-control" id="backend_technologies" name="backend_technologies" value="<?php echo htmlspecialchars($project['backend_technologies']); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo htmlspecialchars($project['description']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="website_url">Website URL</label>
            <input type="url" class="form-control" id="website_url" name="website_url" value="<?php echo htmlspecialchars($project['website_url']); ?>" required>
        </div>
        <div class="form-group">
            <label for="main_image">Main Image</label>
            <input type="file" class="form-control-file" id="main_image" name="main_image" accept="image/*">
        </div>
        <div class="form-group">
            <label>Remove Old Image</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="remove_old_image_yes" name="remove_old_image" value="yes">
                <label class="form-check-label" for="remove_old_image_yes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="remove_old_image_no" name="remove_old_image" value="no" checked>
                <label class="form-check-label" for="remove_old_image_no">No</label>
            </div>
        </div>
        <div class="form-group">
            <label for="display_order">Display Order</label>
            <input type="number" class="form-control" id="display_order" name="display_order" value="<?php echo htmlspecialchars($project['display_order']); ?>" required>
        </div>
        <div class="form-group">
            <label for="additional_images">Additional Images</label>
            <input type="file" class="form-control-file" id="additional_images" name="additional_images[]" accept="image/*" multiple>
        </div>
        <a href="/projects" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
