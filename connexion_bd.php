<?php
$host="localhost";
$dbname="loire";
$username="root";
$password="root";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connexion à la base de donnée reussite !";
}catch (PDOException $e){
    echo "Echec de la connexion : " . $e->getMessage();
}
?>