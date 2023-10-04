<?php

/*
Monitor:
Hereda de Productos pero además tiene los siguientes atributos y métodos
Atributos: Pulgadas que será privada.
Métodos:
Constructor: Será un constructor mágico que recibe todos los atributos, tanto del
producto como del monitor como parámetro. Llamará al constructor padre para
asignar los valores de productos y asignará el valor del atributo pulgadas.
Asignar: Igual que el anterior llamará al asignar padre y además añadirá una
posición más al array asociativo; la del atributo pulgadas.
DiscoDuro:
Hereda de Producto pero además tiene los siguientes atributos y métodos
Atributos: capacidad que será privada.
Métodos:
Constructor: Será un constructor mágico que recibe todos los atributos, tanto del
producto como del discoduro como parámetro. Llamará al constructor padre para
asignar los valores de productos y asignará el valor del atributo capacidad.
Asignar: Igual que el anterior llamará al asignar padre y además añadirá una
posición más al array asociativo; la del atributo capacidad
*/

class Producto{
    private $peso;
    private $precio;
    private $stock;

    function __construct($peso, $precio, $stock){
        $this->peso = $peso;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    function asignar() {
        return get_object_vars($this);
    }

    function __get($var){
        if (property_exists(__CLASS__, $var)){
        return $this->$var;
        }
        return NULL;
    }

    public function __toString(){ 
        return "<p>Peso: $this->peso"."kg</p>"."<p>Precio: $this->precio"."€</p><p>Stock: ".$this->stock." units</p>"; 
        }
}

class Monitor extends Producto{
    private $pulgadas;

    function __construc($peso, $precio, $stock, $pulgadas) {
        parent::__construct($peso, $precio, $stock);
        $this->pulgadas = $pulgadas;
    }

    function asignar() {
        $vector = parent::asignar();
        $vector['pulgadas'] = $this->pulgadas;
        return $vector;
    }
}

class DiscoDuro extends Producto{
    private $capacidad;

    function __construc($peso, $precio, $stock, $capacidad) {
        parent::__construct($peso, $precio, $stock);
        $this->capacidad = $capacidad;
    }

    function asignar() {
        $vector = parent::asignar();
        $vector['capacidad'] = $this->capacidad;
        return $vector;
    }
}