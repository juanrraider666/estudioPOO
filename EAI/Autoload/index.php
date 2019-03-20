<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 3:45 PM
 */
//require_once 'Usuario.php';
//require_once 'Categoria.php';
//require_once 'Entrada.php';


require_once 'autoload.php';
//$Us = new User();
// $USER->nombre= "lol";

//$Entrada = new Entrada("lol");
//var_dump($Entrada);


//ESPACIOS DE NOMBRES :

use Miclase\User;

class Principa{
    public $user;

public function __construct()
{
    $this->user = new User();
}
}

//COMPORBAR SI EXISTE UNA CLASE

$principal = new Principa();
class_exists($principal);