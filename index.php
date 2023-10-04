<?php
/*
CONTROLADOR
Será un único fichero php llamado index.php, que mostrará un formulario con todos los
atributos de todas las clases y una lista desplegable para elegir si es monitor o disco duro.
En función del tipo de producto elegido, se crea un objeto de ese tipo y utilizando
sus métodos, se asignan los valores introducidos a su array asociativo. Finalmente se
mostrará por pantalla el contendido de este objeto utilizando la vista diseñada para esto.
*/
require "funciones.php";
require "vistas/inicio.html";

if(isset($_POST['enviarAtributos'])){
    $tipoProd = $_POST['tipoProducto'];
    if($tipoProd === "monitor"){
        $ob = new Monitor($_POST['precio'], $_POST['peso'], $_POST['stock'], $_POST['pulgadas']);
    }else{

    }
}else{
    require "vistas/formulario.php";
}

require "vistas/fin.html";
?>    


