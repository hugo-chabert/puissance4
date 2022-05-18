<?php
require_once(__DIR__ . '/../controller/User.php');
require_once(__DIR__ . '/../controller/Toolbox.php');
require_once(__DIR__ . '/../controller/Security.php');

session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/puissance4.css">
    <script src="../public/js/script.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Puissance 4</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <main>
        <article>
            <?php if(Security::isConnect()){?>
                <h3> <?= $_SESSION['user']['login']; ?>  Tu es en Rouge </h3>
            <h3>L'invité est en Jaune</h3>
            <?php } ?>
        </article>
        <div id="board"></div>
        <br>
    </main>
    <?php require_once 'footer.php'; ?>
</body>
</html>