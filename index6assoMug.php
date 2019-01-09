<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 13:45
 */


$servername = "localhost";
$username = "id7331076_sophie";
//$password =
$dbname = "id7331076_test1";

//connecter
$conn= NEW mysqli($servername,$username,$password);

//verifier qu il n y a pas d'erreur de connection:
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);//interrompt l'execution du script (pas conseillé, mettre message d erreur ou autre chose)
}
else
{
// Selectionner la base à utiliser
    $conn->select_db($dbname);//le "->" sert a acceder aux donnees objet en php
}






////////////////ajout dans liste eleves_mugs - IDEE + OPTIMALE A REFAIRE///////////////////////
// POUR ASSOCIER LES DEUX FAIRE UNE LISTE DEROULANTE MAIS DU COUP DANS L AFFICHAGE ----> LA BOUCLE WHILE: FAIRE UN TABLEAU AU LIEU D UN ECHO POUR PARCOURIR EN BOUCLE


//ESSAI MANUEL AVEC FORMULAIRE HTML BASIQUE
function affiche()
{
    global $conn;
    $associer = "SELECT id, id_eleve, id_mug from eleves_mugs"; //SELECTION DE TRUCS A AFFICHER
    $ass = $conn->query($associer);

    while ($row = $ass->fetch_assoc()) { //ASSOCIER POUR AFFICHER
        echo "id = " . $row['id']." id de l'eleve = " . $row['id_eleve']. " id du mug = " . $row['id_mug']. "<br><br>";
    }
}
affiche();



