<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 13/03/2019
 * Time: 5:26 PM
 */

interface interfaces
//es un contrato en el cual que metodos y en que orden van a estar en la clase que los implementa y cuando
//implementemos esa clase tiene que cumplir obligatoriamente ese contrato
{
public function interactuar();
public function imagenes();


}

class interfaz implements interfaces {

    public $graficos;

    /**
     * @return mixed
     */
    public function getGraficos()
    {
        return $this->graficos;
    }

    /**
     * @param mixed $graficos
     */
    public function setGraficos($graficos)
    {
        $this->graficos = $graficos;
    }

    public function interactuar()
    {
         echo  "fack"  .PHP_EOL;
        // TODO: Implement interactuar() method.
    }

    public function imagenes()
    {
        // TODO: Implement imagenes() method.
    }
}

$interfaz = new interfaz();
$interfaz->setGraficos("paint");
$interfaz->interactuar();
var_dump($interfaz);