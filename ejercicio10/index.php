<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 09</title>
</head><body>

<h1> Recogida de datos de usuario  </h1>
<form method="get" action="app.php">
	<label>Nombre de usuario</label>
    	<input type="text" name="nombre">
    	<br>
    <label>Teléfono</label>
    	<input type="text" name="telefono">
    	<br>
    	<input type="submit" name="" value="Enviar">
</form>

    <h1>Datos recibidos</h1>
    <p>Nombre de usuario: </p>

</body>


<!-- 
<h1> Recogida de datos de usuario  </h1>
<form method="get" action="<?php echo $_SERVER['PHP....'?>">
	<label>Nombre de usuario</label>
    	<input type="text" name="nombre">
    	<br>
    <label>Teléfono</label>
    	<input type="text" name="telefono">
    	<br>
    	<input type="submit" name="" value="Enviar">
</form>

    <h1>Datos recibidos</h1>
    <p>Nombre de usuario: </p>

</body> -->
