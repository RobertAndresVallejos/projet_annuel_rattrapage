<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8">
    </head>

    <body>
                
        <?php require_once ('../composants/header.php')?>

        <main>
            <section class="fenetre_inscription">
                <h1>Inscription</h1>
                <form action="result.php" method="post">
                    <label class="text2" for="civilite">Civilité</label>
                    <input type="text" id="civilite" name="civilite" placeholder="Monsieur, Madame" required/>
                    <label class="text2" for="nom">Nom</label>  
                    <input type="text" id="nom" name="nom" placeholder="Nom" required/>
                    <label class="text2" for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required/>
                    <label class="text2" for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="exemple@email.fr" required/>
                    <label class="text2" for="mot_de_passe">Mot de passe</label>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe" required/>
                    <label class="text2" for="password_verification">Mot de passe de vérification</label>
                    <input type="password" id="password_verification" name="password_verification" placeholder="Mot de passe" required/>
                    <button class="bouton1" type="submit">Valider</button>
                </form>
            </section>
        </main>

        <?php require_once ('../composants/footer.php')?>

    </body>
</html>