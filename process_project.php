<?php
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: /');
    exit;
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $frontend_technologies = $_POST['frontend_technologies'];
    $backend_technologies = $_POST['backend_technologies'];
    $project_type = $_POST['project_type'];
    $website_url = $_POST['website_url'];

    $main_image = 'uploads/' . basename($_FILES['main_image']['name']);
    move_uploaded_file($_FILES['main_image']['tmp_name'], $main_image);

    try {

        if (isset($_POST['backend_technologies_checkbox']) && $_POST['backend_technologies_checkbox'] == 'yes') {
            $backend_technologies = 'No backend';
        } else {
            $backend_technologies = $_POST['backend_technologies'];
        }

        $sql = "INSERT INTO projects (title, description, main_image, frontend_technologies, backend_technologies, project_type, website_url) 
                VALUES (:title, :description, :main_image, :frontend_technologies, :backend_technologies, :project_type, :website_url)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':main_image' => $main_image,
            ':frontend_technologies' => $frontend_technologies,
            ':backend_technologies' => $backend_technologies,
            ':project_type' => $project_type,
            ':website_url' => $website_url
        ]);

        $project_id = $pdo->lastInsertId(); 

        // Handle additional images
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

        // echo 'Project and images added successfully!';
        header('Location: /projects');
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} 

else
{
    echo "No data received";
}
?>
