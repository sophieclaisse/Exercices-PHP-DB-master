<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 10:02
 */

include "index6assoMug.php";

function ajout()
{
    $mugID= $_POST['mugID'];
    $eleveID= $_POST['eleveID'];

    global $conn;
    $sql = "INSERT INTO eleves_mugs VALUES ('','$eleveID', '$mugID')";
    $conn->query($sql);

}
ajout();