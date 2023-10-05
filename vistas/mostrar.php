<?php
/*
mostrar.php: Archivo que muestra el array asociativo creado con asignar. (muestra todos
sus atributos)
*/
foreach ($valores as $key => $value) {
    echo "<p>$key: $value</p>";
}