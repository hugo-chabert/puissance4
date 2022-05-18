<header>
    <nav>
        <a href="../index.php"><img src="https://img.icons8.com/external-anggara-line-anggara-putra/344/external-checklist-ecommerce-anggara-line-anggara-putra.png"/><h1>Puissance 4</h1></a>
        <?php
        if(isset($_SESSION['user'])){?>
            <ul>
                <hr>
                <a href="view/puissance4.php"><li>Puissance 4</li></a>
                <hr>
                <a href="view/disconnect-index.php"><li>Deconnexion</li></a>
                <hr>
            </ul>
        <?php } ?>
    </nav>
</header>
<link rel="stylesheet" type="text/css" href="public/css/header.css">