<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
</head><body>

<!-- Ejercicio01.php. 
Crea un scprit php que guarde en un array ordenado ($array1) el nombre de 5 personas,
inicializalo en una sóla sentencia. 
Recorrelo con un bucle foreach y muestra el contenido en una tabla. 
Haz lo mismo en $array2 pero ahora añade los elementos uno a uno 
y muestra el orden ocupado por cada elemento.
 -->
<?php

//Se crea el $array2 y se inicializa en una misama sentencia
$array1 = array (
    'v1' => Ana,
    'v2' => Maria,
    'v3' => Juan,
    'v4' => Victor,
    'v5' => Emma
);

//Se crea el $array2 añadiendo los elementos uno a uno 

$array2 = array ();
$array2[v1] = 'Ana';
$array2[v2] = 'Maria';
$array2[v3] = 'Juan';
$array2[v4] = 'Victor';
$array2[v5] = 'Emma';


//Se recorre el array con un bucle foreach y muestra el contenido
echo "<h2>Ejercicio01.php</h2><br/><table border='1px'; width='100'; >";

//sort($array1);
echo "<tr><th>array1</th></tr>";
foreach ($array1 as $position=>$element){
     echo '<tr><td>' . $element . '</td></tr>';
}
echo "</table>";

echo "<br/><table border='1px'; width='150'>";

echo "<tr><th colspan=2>array2</th></th>";
foreach ($array2 as $position=>$element){
     echo '<tr><td>' . $position . '</td><td>' . $element . '</td></tr>';
}
echo "</table>";

//var_dump($array1);
?>
</body></html>