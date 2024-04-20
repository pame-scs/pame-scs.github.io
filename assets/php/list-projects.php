<?php
require_once 'bdd/projects.php';
$database = new Database();
$liste = $database->listep();
foreach ($liste as $row) {
    echo "<div class='project'>";
    echo "<h3>" . $row['name'] . "</h3>";
    echo "<p>" . $row['descProject'] . "</p>";
    echo "<a href='projet.php?id=" . $row['id'] . "'>See more</a>";
    echo "</div>";
}
