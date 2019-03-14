<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 9:05 AM
 */

//TRAITS nos permiten definir una serie de metodos para compártirlo en difernetes clases


trait  Utilidades{
    public function mostrarNombre(){
        echo "el nombre es ".$this->nombre;
    }
}
class coche{

 public $marca;
 public $nombre;

 public function __construct($nombre)
 {
     $this->nombre = $nombre;
 }

    use Utilidades;

}

class persona{
use Utilidades;
   public $nombre;
    public $apellidos;
}

class videojuegos{

    public $nombre;
    public $anio;

}


$persona = new persona();
$persona->nombre = "nombre";
$persona->mostrarNombre();





//var_dump($coche);