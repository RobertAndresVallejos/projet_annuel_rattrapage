<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscritpion réussite !</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8">
    </head>
    
    <body>

        <?php require_once ('../composants/header.php')?>

        <?php require_once ("../connexion_bd.php")?>

        <main>
            
            <h1>Inscription reussite !</h1>

            <?php
            
                //$id = $_GET['id'];
                //$civilite = $_GET['civilite'];
                //$nom = $_GET['nom'];
                //$prenom = $_GET['prenom'];
                //$email = $_GET['email'];
                //$mot_de_passe = $_GET['mot_de_passe'];
                //$userRole = $_SESSION['role'];
                $id = $_POST['id'];
                $userRole = $_SESSION['role'];
                $_SESSION['email'] = $email;

                if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
                    //
                    echo "<p>Bienvenue, " . $_SESSION["email"] . "</p>";
                    //echo "<p>" . "Bonjour, " . $user["nom"] . ", votre redirection s'est bien effectuer ! </p>";
                }

                /*Récupération de l'utilisateur en BD*/
                $request = $pdo->prepare("SELECT * FROM utilisateur WHERE id = :id");

                /*Execution de la requete*/
                $request->execute();

                /*Récupération des données envoyées*/
                $result = $request->fetchAll();
                
                if(count($result) > 0){
                    /*Initialisation des variables*/
                    /*""!*/
                    $civilite = $result[0]['civilite'];
                    $nom = $result[0]['nom'];
                    $prenom = $result[0]['prenom'];
                    $email = $result[0]['email'];
                    $mot_de_passe = $result[0]['mot_de_passe'];
                    $role = $result[0]['role'];

                    if($role == "admin"){
                        //Traitement
                    }else{
                        echo "Vous n'avez pas les droits pour ...";
                    }
                }else{
                    echo "Utilisateur introuvable";
                }
                
                //PROBLEME
            ?>
        </main>

        <?php require_once ('../composants/footer.php')?>

    </body>
</html>