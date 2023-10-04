<?php

echo "<form action='' enctype='multipart/form-data' method='post'>";
echo "<label>Peso:</label><br>";
echo "<input type='text' name='peso'><br>";
echo "<label>Precio:</label><br>";
echo "<input type='text' name='precio'><br>";
echo "<label>Stock:</label><br>";
echo "<input type='text' name='stock'><br>";
echo "<label>Pulgadas:</label><br>";
echo "<input type='text' name='pulgadas'><br>";
echo "<label>Capacidad:</label><br>";
echo "<input type='text' name='capacidad'><br>";
echo "<select name='tipoProducto'>";
echo "<option value='monitor'>Monitor</option>";
echo "<option value='discoDuro'>Disc duro</option>";
echo "<input type='submit' name='enviarAtributos'>";
echo "</form>";