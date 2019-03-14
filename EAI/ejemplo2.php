<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 2:41 PM
 */

interface  MyOptime{

    public function Usuarios();

    public function SeguimientoHoras($Horas);

    public function FinalDia($Horas);


}

class Personal{
    const PERFIL = "Bajo Perfil";
    public $edad;
    public $discapacidad;


    public function __construct($edad,$discapacidad)
    {
        $this->edad = $edad;
        $this->discapacidad = $discapacidad;
    }

    /**
     * @return mixed
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * @param mixed $discapacidad
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

}

trait ResuladosTrabajo{
    public function Test(){
        return "Señor {$this->Nombre}, Usted Aplica para esto? ";
    }
}

class Trabajador extends Personal implements MyOptime {

use ResuladosTrabajo;


    public $Nombre;
    public $Apellido;
    public $HorasTrabajadas;
    public $HorasTrabajadasLlevadas;

    public function __construct($Nombre,$Apellido,$HorasTrabajadas,$HorasTrabajadasLlevadas)
    {
        parent::__construct($this->getDiscapacidad(),$this->getEdad());
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->HorasTrabajadas = $HorasTrabajadas;
        $this->HorasTrabajadasLlevadas = $HorasTrabajadasLlevadas;
    }



    public function Usuarios()
    {
        return "el Señor {$this->Nombre} a ingresado</br>";
        // TODO: Implement Usuarios() method.
    }

    public function SeguimientoHoras($Horas)
    {
        return "el señor {$this->Nombre} a trabajado {$Horas} Horas</br>";
        // TODO: Implement SeguimientoHoras() method.
    }

    public function FinalDia($Horas)
    {

        return "el señor {$this->Nombre} lleva en 1 dia  {$Horas} Horas, tambien demustra tener " .$this::PERFIL." </br>";
        // TODO: Implement FinalDia() method.
    }


}

$trabajador = new Trabajador("JUAN","DIAZ",12,1);
echo $trabajador->SeguimientoHoras($trabajador->HorasTrabajadasLlevadas);
echo $trabajador->Usuarios();
echo $trabajador->FinalDia($trabajador->HorasTrabajadas);
echo $trabajador->Test();
echo $trabajador->setDiscapacidad("ninguna");
echo $trabajador->setEdad(23);

var_dump($trabajador);


//var_dump($trabajador);
