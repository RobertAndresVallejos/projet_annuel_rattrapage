<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="utf-8">

    <body>
        <?php require_once ('../composants/header.php')?>

        <?php require_once ('../connexion_bd.php')?>

        <?php
            session_destroy();

            header('Location: connexion.php');

        ?>

        <?php require_once ('../composants/footer.php')?>
    </body>

</html>