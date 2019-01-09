<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 13:26
 */

include "index4affichMug.php";


function ajout()
{
    $color= $_POST['color'];

    global $conn;
    $sql = "INSERT INTO mugs VALUES ('','$color')";
    $conn->query($sql);

}
ajout();

