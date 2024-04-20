<?php require_once ("assets/locales/locales.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Anta&display=swap"
      rel="stylesheet"
    >
</head>
<body id="contact-page">
    <?php include "assets/php/header.php" ?>
    <main class="contact-main">
        <section class="contact">
        <h1>Contact Me</h1>
        <form id="contact-form">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Mail">
            <input type="text" placeholder="Subject">
            <textarea name="message" id="contact-msg" cols="30" rows="10" placeholder="Message"></textarea>
            <button id=summit-button>Summit</button>
        </form>

        </section>
    </main>
    <?php include "assets/php/footer.php" ?>
    <script src="assets/js/summit.js"></script>
</body>
</html>