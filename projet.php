<?php require_once("assets/locales/locales.php"); ?>
<?php
require_once 'bdd/projects.php';
$database = new Database();
$project = $database->project($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project["name"] ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "assets/php/header.php" ?>
    <main class="page-projects">
        <img src=<?php echo $project["img"] ?> alt="" class="logo">
        <article>
            <h1><?php echo $project["name"] ?></h1>
            <h2>General Information</h2>
            <p><?php echo $project["descProject"] ?></p>
            <h2>My role</h2>
            <p><?php echo $project["descPosition"] ?></p>
        </article>
    </main>
    <div class="spacer1 layer3"></div>
    <h1 style="background-color: #55a6bc;color:#1a1a1a;margin:0;text-align:center">See more projects</h1>
    <article id="projects">
        <?php include "assets/php/list-projects.php" ?>
    </article>
    <?php include "assets/php/footer.php" ?>
</body>

</html>