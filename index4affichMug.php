<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 13:18
 */

//informations de connection (attention au mot de passe a pas mettre en ligne)
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

function aff()
{
    global $conn;
    $selection = "SELECT id, description from mugs"; //SELECTION DE TRUCS A AFFICHER
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) { //ASSOCIER POUR AFFICHER
        echo "id = " . $row['id']." description du mug = " . $row['description']. "<br><br>";
    }
}
aff();
