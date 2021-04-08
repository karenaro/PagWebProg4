<?php

    
    //echo $idurge;
    //var_dump($_REQUEST); imprime todo lo que le envia del formulario

    //1. conectar a la base de datos
    $dbhost   = "localhost";
    $dbname   = "veterinary";
    $username = "root";
    $password ="";

    $cnx = new PDO("mysql:host = $dbhost; dbname=$dbname", $username, $password);

    //2. Construir la sentencia SQL
    $sql = "SELECT id, name FROM idurge";

    //3.Preparar la senctencia SQL
    $q = $cnx->prepare($sql);

    //4. ejecutar la sentecia SQL
    $result = $q->execute();
    
    $idurge = $q->fetchAll();
    var_dump($idurge);

?>