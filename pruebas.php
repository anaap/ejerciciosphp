 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 7</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="pruebas.php">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <label>Contraseña</label><input type="password" value="" name="password"> <br>
        <input type="submit" value="enviar">
    </form>
    
    
    <?php
    if(isset($_POST) && !empty($_POST)){
        echo "<h2>Datos enviados</h2>";
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Bienvenido $_POST[nombre] $_POST[apellidos]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        var_dump($_POST);
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
</body></html>