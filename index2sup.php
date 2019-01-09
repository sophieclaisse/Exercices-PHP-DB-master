<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 10:19
 */

include "index.php";



    function supprimer()
    {

        $ID= $_POST['id'];

        global $conn;
        $effacer= "DELETE from eleves where id= $ID";
        $conn->query($effacer);
    }
    supprimer();


