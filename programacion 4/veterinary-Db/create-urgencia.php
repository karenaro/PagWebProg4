
<?php

    
//echo  $animal;
//var_dump($_REQUEST); imprime todo lo que le envia del formulario

//1. conectar a la base de datos
$dbhost   = "localhost";
$dbname   = "veterinary";
$username = "root";
$password ="";

$cnx = new PDO("mysql:host = $dbhost; dbname=$dbname", $username, $password);

//2. Construir la sentencia SQL
$sql = "SELECT id_animal, nombre FROM $animals";

//3.Preparar la senctencia SQL
$q = $cnx->prepare($sql);

//4. ejecutar la sentecia SQL
$result = $q->execute();

 $animals = $q->fetchAll();
var_dump( $animals);

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <title>Veterinary</title>
    </head>
    <body>
       <form action="guardar-animals.php" method="POST">
            Fecha<input type="text" name="fecha"> <br><br>
            Animal
            <select name="animal" >
                <?php
                for($i=0; $i<count($animal); $i++){
                ?>    
                <option value=""><?php echo $animal[$i]["id_animal"] ?></option>
                <?php
                }
                ?>
            </select>
            Tipo Urgencia<input type="text" name="tipo-urge"> <br><br>
            
       <br>
       <br>
       <input type="submit" value="Guardar">
       </form>
    </body>
</html>