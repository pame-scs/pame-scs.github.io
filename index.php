<?php require_once ("assets/locales/locales.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
</head>

<body style="margin-left: 0px ; margin-right: 0px;">
  <?php include "assets/php/header.php" ?>
  <main>
    <article id="welcome">
      <img src="/assets/img/profile_picture.png" alt="">
      <h1>Pamela Castaneda</h1>
      <h2>Community Manager</h2>
    </article>
    <div class="spacer1 layer1"></div>
    <h2 class="section-title">About me</h2>
    <article id="about-main">
      <article class="about-me-sections">
        <h3>Personal</h3>
        <p><?php echo $TRAD["perso"] ?></p>
      </article>
      <article class="about-me-sections">
        <h3><?php echo $TRAD["skills"] ?></h3>
        <ul>
          <li>Social Media Marketing : LinkedIn, Facebook Business, Instagram </li>
          <li>Digital Design : Canva, Photoshop </li>
          <li>Édition vidéo: Filmora, DaVinci Resolve, CapCut</li>
          <li>Community Manager: Meta Business Suite</li>
          <li>UI/UX Design: Lunacy</li>
        </ul>
      </article>
      <article class="about-me-sections">
        <h3>Professional</h3>
        <ul>
          <li>Community Manager <a href="https://www.linkedin.com/company/touchtechnologies/">@touchtech</a></li>
          <li>Resp Communications <a href="https://www.instagram.com/aius_strasbourg/">@aius_strasbourg</a></li>
        </ul>
      </article>
    </article>
    <div class="spacer2 layer2"></div>
    <?php include "assets/php/search.php" ?>
    <div class="search_results"></div>
    <article id="projects">
      <?php include "assets/php/list-projects.php" ?>
    </article>

  </main>
  <?php include "assets/php/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/search.js"></script>
</body>

</html>