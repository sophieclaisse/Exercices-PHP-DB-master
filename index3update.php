<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:14
 */
include "index.php";

function changerData ()
{
    $ID= $_POST['idU'];
    $surname= $_POST['surnameU'];
    $name= $_POST['nameU'];
    $age= $_POST['ageU'];

    global $conn;
    $aJour= "UPDATE eleves set prenom='$surname', nom='$name', age='$age'  where id = '$ID'";
    $conn->query($aJour);
}
changerData();