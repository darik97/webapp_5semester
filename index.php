<?php
    $page = $_GET['page'];
    require ('main.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Game</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="page-with-img">

        <nav class="header">
            <div class="header__logo">
                <a href="index.php?page=1"><h2>GameName</h2></a>
            </div>
            <?php
                echo Main::getMenu($page);
            ?>
        </nav>
        <?php
             Main::getPage($page);
        ?>
    </body>
</html>