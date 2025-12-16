<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <body>
    
        <?php require_once ("../connexion_bd.php")?>

        <?php require_once ('../composants/header.php')?>

        <?php require_once ('../composants/nav.php')?>
        
        <main>
            <?php
                /*création des variables de récupération*/
                $civilite = $_POST['civilite'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $mot_de_passe = $_POST['mot_de_passe'];
                $password_verification = $_POST['password_verification'];
                $role = "user";

                /*vérification de la présence des données via empty en utilisant la mathod $_POST*/
                if(empty($civilite) || empty($nom) || empty($prenom) || empty($email) || empty($mot_de_passe)){
                    header('Location: inscription.php');//test:connexion;inscription
                    exit();
                }
                
                /*vérification du mot de passe*/
                if($password_verification == $mot_de_passe){
                    /*mot de passe hacher*/
                    $mot_de_passe_hacher = password_hash($mot_de_passe, PASSWORD_DEFAULT);

                    /*préparation de requetes SQL*/
                    $request = $pdo->prepare('INSERT INTO utilisateur (civilite, nom, prenom, email, mot_de_passe, role) VALUES (:civilite, :nom, :prenom, :email, :mot_de_passe, :role)');
                    
                    /*lie une variable PHP à un marqueur*/
                    $request->bindParam(':civilite', $civilite);
                    $request->bindParam(':nom', $nom);
                    $request->bindParam(':prenom', $prenom);
                    $request->bindParam(':email', $email);
                    $request->bindParam(':mot_de_passe', $mot_de_passe_hacher);
                    $request->bindParam(':role', $role);
                    
                    /*éxecution de la requête pour l'envoi des données*/
                    $request->execute();
                    
                    /*vérification de la création en BD de l'utilisateur*/
                    /*rowCount: vérifie le nbr. de lignes affectées*/
                    if($request->rowCount() === 1){
                        header('Location: inscription_reussite.php');
                        echo "L\'utilisateur a été ajouter avec succès";//result.php
                        exit();//
                        //echo "L\'utilisateur a été ajouter avec succès";
                    }else{
                        echo"Une erreur est survenue lors de l\'ajout de l\'utilisateur";
                    }
                }else{
                    echo"Les mots de passe ne correspondent pas";
                }
            ?>
        </main>

    </body>
</html>