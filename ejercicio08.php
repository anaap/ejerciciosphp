<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 08</title>
</head><body>

<h1> Recogida de datos de usuario  </h1>
<form method="post" action="ejercicio08.php">
    <label>Nombre de usuario</label>
        <input type="text" name="nombre">
        <br>
    <label>Teléfono</label>
        <input type="text" name="telefono">
        <br>
        <input type="submit" name="" value="Enviar">
</form>


    <?php
    if(isset($_POST) && !empty($_POST)){
        echo "<h1>Datos recibidos</h1>";
        echo "Nombre de usuario: $_POST[nombre]<br>Telefono: $_POST[telefono]";
    }
    ?>

</body>


