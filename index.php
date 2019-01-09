<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

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



/////*****EXERCICE*****/////////
////////////////////////////////

/*function ajouter()
{
    global $conn;
    $sql = "INSERT INTO eleves VALUES ('','Maxime', 'Ducamp','32')";
    $conn->query($sql);

}
ajouter();*/


function afficher()
{
    global $conn;
    $selection = "SELECT id, prenom, nom, age from eleves"; //SELECTION DE TRUCS A AFFICHER
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) { //ASSOCIER POUR AFFICHER
        echo "id = " . $row['id']." prenom = " . $row['prenom'] . " nom = " . $row['nom'] . " age = " . $row['age'] . "<br><br>";
    }
}
afficher();


/*function changerData ()
{
    global $conn;
    $aJour= "UPDATE eleves set age='31' where id = 22";
    $conn->query($aJour);
}
changerData();*/


/*function supprimer()
{
    global $conn;
    $effacer= "DELETE from eleves where id=22";
    $conn->query($effacer);
}
supprimer();*/






