<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Gestion des logements</title>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8">
    </head>

    <body>

        <?php require_once ("../connexion_bd.php")?>

        <?php require_once ('../composants/header.php')?>
        
            <main>
                    <table id="tableau1">
                        <caption>
                            Tableaux de tous les utilisateurs
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Civilite</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">...</th>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td><button>...</button></td>
                                <td><button>...</button></td>
                            </tr>
                            <tr>
                                <th scope="row">...</th>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
            </main>
        <?php require_once('../composants/footer.php')?>
    </body>
</html>