<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion réussite !</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8">
    </head>

    <body>

        <?php require_once ('../composants/header.php')?>

        <?php require_once ("../connexion_bd.php")?>

        <main>
            <h1>connexion reussite !</h1>
            <?php
                
                if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
                    echo "<p>" . "Votre adresse email est la suivant : " . $_SESSION["email"] . "! </p>";
                }else{
                    header("connexion.php");
                }

                /*Récupère les informations de tous les utilisateurs*/
                $get_request = 'SELECT * FROM utilisateur';

                /*Renvoie une strcuture de données dans $result*/
                $result = $pdo->query($get_request);
            
                foreach($result as $user){
                    echo "<a href='user.php?id=" . $user["id"]."'>" . $user["nom"];
                }

                
                //PROBLEME

            ?>
        </main>

        <?php require_once ('../composants/footer.php')?>

    </body>
</html>