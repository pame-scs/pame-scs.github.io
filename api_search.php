<?php
require_once 'bdd/projects.php';
$database = new Database();
$terms = isset($_POST["q"]) ? $_POST["q"] : '';
$projects = $database->searchProject($terms);
if ($projects) {
    $projectsArray = [];
    foreach ($projects as $project) {
        $projectsArray[] = [
            'name' => $project['name'],
            'desc' => $project['descProject']
        ];
    }
    echo json_encode($projectsArray);
} else {
    echo json_encode(['error' => 'No project found']);
}
?>