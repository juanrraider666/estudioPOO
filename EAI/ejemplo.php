<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 2:38 PM
 */
interface Encendible
{
    public function encender();
}



interface Apagable
{
    public function apagar();
}



interface Acelerable
{
    public function acelerar($velocidad);
}


interface Marcable
{
    public function llamar($numero);
}


interface EquipoElectronico extends Encendible, Apagable, Marcable
{
}



interface Transporte extends Encendible, Apagable, Acelerable
{
}


function encenderElemento (Encendible $elemento)
{
    $elemento->encender();
}



function apagarElemento (Apagable $elemento)
{
    $elemento->apagar();
}

function aumentarVelocidad (Acelerable $elemento, $velocidad)
{
    $elemento->acelerar($velocidad);
}


function llamar (Marcable $elemento, $numero)
{
    $elemento->llamar($numero);
}

function usarEquipoElectronico (EquipoElectronico $elemento, $numero)
{
    encenderElemento($elemento);
    llamar($elemento, $numero);
    apagarElemento($elemento);
}

function viajarACasa (Transporte $elemento, $velocidad)
{
    encenderElemento($elemento);
    aumentarVelocidad($elemento, $velocidad);
    apagarElemento($elemento);
}

class Bombillo implements Encendible
{
    public function encender()
    {
        echo "El bombillo se ha encendido" . PHP_EOL;
    }
}




class Coche implements Transporte
{
    public function encender()
    {
        echo "El coche se ha encendido" . PHP_EOL;
    }
    public function apagar()
    {
        echo "El coche se ha apagado" . PHP_EOL;
    }
    public function acelerar($velocidad)
    {
        echo "El coche a aumentado a ".$velocidad. ' Km/h' . PHP_EOL;
    }
}




class Celular implements EquipoElectronico
{
    public function llamar($numero)
    {
        echo "LLamando al numero ".$numero. PHP_EOL;
    }
    public function encender()
    {
        echo "Enciendo el celular". PHP_EOL;
    }
    public function apagar()
    {
        echo "Apago el celular". PHP_EOL;
    }
}


$b = new Bombillo();
$coche = new Coche();
$telefono = new Celular();
//encenderElemento($b);
//encenderElemento($coche);
//apagarElemento($coche);
//aumentarVelocidad($coche, 30);
//aumentarVelocidad($coche, 60);
viajarACasa($coche, 30);
//viajarACasa($b, 30);
usarEquipoElectronico($telefono, 123);
