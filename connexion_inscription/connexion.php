<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8">
    </head>

    <body>
        
        <?php require_once ('../composants/header.php')?>

        <main>
            <section class="fenetre_connexion">
                <h1>Connexion</h1>
                <form action="result_connexion.php" method="post">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="email@exemple.fr" required/>
                    <label for="mot_de_passe">Mot de passe</label>
                    <input id="mot_de_passe" name="mot_de_passe" type="password" placeholder="Mot de passe" required/>
                    <button type="submit">Valider</button>
                </form>
            </section>
        </main>
        
        <?php require_once('../composants/footer.php')?>

    </body>
</html> 