<?php

    $nombre = $_REQUEST["nombre"];
    $raza = $_REQUEST["raza"];
    $talla = $_REQUEST["talla"]; 
    $edad = $_REQUEST["edad"];
    $tipo = $_REQUEST["tipo"];
    $genero = $_REQUEST["genero"];
    //echo $nombre;
    //var_dump($_REQUEST); imprime todo lo que le envia del formulario

    //1. conectar a la base de datos
    $dbhost   = "localhost";
    $dbname   = "veterinary";
    $username = "root";
    $password ="";

    $cnx = new PDO("mysql:host = $dbhost; dbname=$dbname", $username, $password);

    //2. Construir la sentencia SQL
    $sql = "INSERT INTO animals (id_animal, nombre, raza, talla, edad, tipo, genero) VALUES(NULL, '$nombre', '$raza', '$talla', '$edad', '$tipo', '$genero')";

    //3.Preparar la senctencia SQL
    $q = $cnx->prepare($sql);

    //4. ejecutar la sentecia SQL
    $result = $q->execute();
    if($result){
        echo "Guardado Exitoso";
    }else{
        echo "Error Al Guardar $nombre";
    }

?>