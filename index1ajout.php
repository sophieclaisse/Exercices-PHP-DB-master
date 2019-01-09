<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 10:28
 */
include "index.php";

function ajout()
{

    $surname= $_POST['surname'];
    $name= $_POST['name'];
    $age= $_POST['age'];

    global $conn;
    $sql = "INSERT INTO eleves VALUES ('','$surname','$name', '$age')";
    $conn->query($sql);

}
ajout();