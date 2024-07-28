<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: /');
        exit;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin-top: 250px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="url"],
        textarea,
        input[type="file"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .file-label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        .file-input {
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add a New Project</h1>
        <form action="process_project.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="main_image">Main Image:</label>
            <input type="file" id="main_image" name="main_image" accept="image/*" required>

            <label for="frontend_technologies">Frontend Technologies:</label>
            <input type="text" id="frontend_technologies" name="frontend_technologies" required>

            <!-- add one check box that if chcek box is click than backend is show if backend is not than show defualt message   -->
            
            
            <label for="backend_technologies">Backend Technologies:</label>
            <input type="text" id="backend_technologies" name="backend_technologies" >
            <label for="backend_technologies_checkbox">If No backend than click check box?
            <input type="checkbox" id="backend_technologies_checkbox" name="backend_technologies_checkbox" value="yes">
            </label>
            

            <label for="project_type">Project Type:</label>
            <input type="text" id="project_type" name="project_type" required>

            <label for="website_url">Website URL:</label>
            <input type="url" id="website_url" name="website_url" required>

            <label class="file-label" for="additional_images">Additional Images:</label>
            <input class="file-input" type="file" id="additional_images" name="additional_images[]" accept="image/*" multiple>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>

