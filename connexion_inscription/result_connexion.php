<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
    </head>

    <body>

        <?php require_once ('../connexion_bd.php')?><!--""-->

        <?php require_once ('../composants/header.php')?>

        <?php require_once ('../composants/nav.php')?>

            <?php
                /*mise en place des variables de récupération*/
                $email = $_POST['email'];
                $mot_de_passe = $_POST['mot_de_passe'];

                /*Vérification si aucune information n'est manquante*/
                if(empty($email) || empty($mot_de_passe)){
                    /*si une information est manquante, redirection vers connexion.php*/
                    header('Location: connexion.php');
                }

                /*Récupération d'un utilisateur en BD*/
                $request = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
                $request->bindParam(':email', $email);
                $request->execute();
                
                /*Récupération des données renvoyées sous la forme d'un tableau strucuré
                Si un utilisateur correspond à l'email, il sera stocké dans $result*/
                $result = $request->fetchAll();

                /*On vérifie que l'utilisateur a bien été trouvé et que le mdp est valide (par rapport à celui en BD)*/
                /*$result[0] fait référence au premier (et unique) utilisateur trouvé. Etant donné que l'ont se connecte avec un seul et unique compte.
                Car fetchAll renvoi un tableau avec tous les enregistrement unique*/
                /*Vérification des bonnes informations de connexion pour l'utilisateur*/
                if(count($result) > 0 && password_verify($mot_de_passe, $result[0]["mot_de_passe"])){
                    /*Stockage dans la variable session de l'email*/
                    $_SESSION["id"] = $result[0]["id"];
                    $_SESSION["civilite"] = $result[0]["civilite"];
                    $_SESSION["nom"] = $result[0]["nom"];
                    $_SESSION["prenom"] = $result[0]["prenom"];
                    $_SESSION["email"] = $result[0]["email"];
                    $_SESSION["mot_de_passe"] = $result[0]["mot_de_passe"];
                    $_SESSION["role"] = $result[0]["role"];
                    /*Redirige ensuite l'utilisateur si la connexion est reussite*/
                    header("Location: connexion_reussite.php");
                    exit();
                }else{
                    /*Redirection si la connexion à echouer*/
                    header('Location: connexion.php');
                }
            ?>

        <?php require_once('../composants/footer.php')?>

    </body>
</html>