<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 1:58 PM
 */

//UNA CLASE ABSTRACTA ES UNA CLASE QUE NO SE PUEDE INSTANCIAR, SI PODEMOS HEREDARLA y definir la estrucutra
abstract  class Ordenador{

    public $estado;
    //define una funcion absatracta no puede definir la funcionalidad adentro, solo la defino
    abstract public function Encender();
}

class  Mac  extends Ordenador {
    public $sof;

    public function arrancar(){
        $this->sof= true;
    }


    public function Encender()
    {
        $this->estado = true;
        // TODO: Implement Encender() method.
    }
}

$ma = new Mac();
$ma->arrancar();
$ma->Encender();
var_dump($ma);