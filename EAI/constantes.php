<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 13/03/2019
 * Time: 5:22 PM
 */

class constantes
{

    const URL = "http://localhost/videorepository/POO/EAI/index.php";
    public $nombre;
    public $apellido;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
}

$user = new constantes();
echo $user::URL; //llamar una constante
var_dump($user);