<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <title>Veterinary</title>
    </head>
    <body>
       <form action="guardar-animals.php" method="POST">
            Nombre<input type="text" name="nombre"> <br><br>
            Raza<input type="text" name="raza"> <br><br>
            Talla<input type="text" name="talla"> <br><br>
            Edad<input type="text" name="edad"> <br><br>
            Tipo
            <select name="tipo">
                <option value="1">Canino</option>
                <option value="2">Felio</option>
                <option value="3">Equino</option>
                <option value="4">Porcino</option>
                <option value="5">Bovino</option>
            </select><br><br>
            Genero <br>
            <input type="radio" name="genero" value="0">Hembra
            <input type="radio" name="genero" value="1">Macho
       <br>
       <br>
       <input type="submit" value="Guardar">
       </form>
    </body>
</html>