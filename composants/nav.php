<nav>
    <?php
    session_start();

    if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
        
        /*Affichage, si l'utilisateur est connecté*/
        echo "<a href=\"../page_guide/guide.php\">Guide</a>";
        echo "<a href=\"../page_guide/map.php\">Map</a>";
        echo "<a href=\"../page_guide/hotel.php\">Hôtel</a>";
        echo "<a href=\"../page_guide/pack.php\">Pack</a>";
        echo "<a href=\"../page_guide/reservation.php\">Réservation</a>";

        $userRole = $_SESSION['role'];
    
        if ($userRole == "admin"){
            echo "<a href=\"../admin/gestion_logement.php\">Gestion logement</a>";
            echo "<a href=\"../admin/graphique_hotel.php\">Graphique hotel</a>";
        }
        
        echo "<a href=\"../connexion_inscription/deconnexion.php\">Déconnexion</a>";

    } else {
        /*Affichage, si l'utilsateur n'est pas connecté*/
        echo "<a href=\"../accueil.php\">Accueil</a>";
        echo "<a href=\"../connexion_inscription/connexion.php\">Connexion</a>";
        echo "<a href=\"../connexion_inscription/inscription.php\">Inscription</a>";
    }
    ?>

</nav>