<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 10:29
 */
include "index6assoMug.php";

//$des= "SELECT mugs.description FROM eleves_mugs/mugs WHERE eleves_mugs.id_eleves AND eleves_mugs.id_mugs = mugs_id";

//$Mname="SELECT eleves.nom FROM eleves_mugs/eleve WHERE eleves_mugs.id_mugs AND eleves_mugs.id_eleves= eleves_id ";

function show()
{
    global $conn;
    //$lier = "SELECT mugs.description, eleves.nom FROM mugs, eleve WHERE eleves_mugs.id_eleves=id_eleve AND eleves_mugs.id_mugs = id_mugs"; //SELECTION DE TRUCS A AFFICHER
    $lier= "SELECT mugs.description, eleves.nom FROM mugs, eleves,eleves_mugs WHERE eleves_mugs.id_eleve= 1 AND eleves_mugs.id_mug = mugs.id AND eleves.id=1 ";
    $asso = $conn->query($lier);

    while ($row = $asso->fetch_assoc()) { //ASSOCIER POUR AFFICHER
        echo "MUG = " . $row['description']." NAME = " . $row['nom']."<br><br>";
    }
}
show();