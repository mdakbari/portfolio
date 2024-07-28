<?php
include 'db.php';
$request = trim($_SERVER['REQUEST_URI'], '/');



if (preg_match('/\.php$/', $request)) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit();
}

try {
    if ($request == '' || $request == 'index' || $request == 'home') {
        include __DIR__ . '/home.php';
    } else {
        if (preg_match('/^edit\/(.+)/', $request, $matches)) {
            $projectTitle = urldecode($matches[1]);
            loadEditProject($projectTitle);
        } else if (preg_match('/^delete_project\/(.+)/', $request, $matches)) {
            $projectTitle = urldecode($matches[1]);
            loadDeleteProject($projectTitle);
        } else {
            $sql = "SELECT title FROM projects";
            $stmt = $pdo->query($sql);
            $projectTitles = $stmt->fetchAll(PDO::FETCH_COLUMN);

            if (in_array($request, $projectTitles)) {
                loadProjectDetails($request);
            } else {
                switch ($request) {
                    case 'about':
                        include __DIR__ . '/about.php';
                        break;
                    case 'contact':
                        include __DIR__ . '/contact.php';
                        break;
                    case 'add_project':
                        include __DIR__ . '/add_project.php';
                        break;
                    case 'services':
                        include __DIR__ . '/services.php';
                        break;
                    case 'portfolio':
                        include __DIR__ . '/portfolio.php';
                        break;
                    case 'projects':
                        include __DIR__ . '/projects.php';
                        break;
                    case 'view_contacts':
                        include __DIR__ . '/view_contacts.php';
                        break;
                    case 'login':
                        include __DIR__ . '/login.php';
                        break;
                    case 'logout':
                        session_destroy();
                        header('Location: /');
                        break;
                    default:
                        http_response_code(404);
                        include __DIR__ . '/404.php';
                        break;
                }
            }
        }
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

function loadProjectDetails($projectName) {
    global $pdo;

    $sql = "SELECT * FROM projects WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$projectName]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($project) {
        include __DIR__ . '/project_detail.php';
    } else {
        http_response_code(404);
        include __DIR__ . '/404.php';
    }
}

// Load edit project function
function loadEditProject($projectName) {
    global $pdo;

    $sql = "SELECT * FROM projects WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$projectName]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($project) {
        include __DIR__ . '/edit_project.php';
    } else {
        http_response_code(404);
        include __DIR__ . '/404.php';
    }
}

// Load delete project function
function loadDeleteProject($projectName) {
    global $pdo;

    $sql = "SELECT * FROM projects WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$projectName]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($project) {
        include __DIR__ . '/delete_project.php';
    } else {
        http_response_code(404);
        include __DIR__ . '/404.php';
    }
}
?>