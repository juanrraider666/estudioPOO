<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 13/03/2019
 * Time: 4:25 PM
 */
//HERENCIA COMPARTIR CARCATERISTICAS ENTRE CLASES, CON EL FIN DE REPETIR EL MINIMO DE CODIGO POSIBLE, UNA CLASE GRANDE Y OTRA CLASE QUE SEA PARCIDA A LA ANETRIOR PERO TIENE POCAS VARIANTES, LA BASE DE ESA CLASE VAN A HACER METD Y ATRI QUE YA SON UTILIZADOS EN OTRA, OPTIMIZAR CODIGO: conclusion=> compartir metodos y atrivutos entre clases


require_once 'lol.php';

$persona = new Persona();

//$persona->setNombre("Nombre1");
var_dump($persona);

$programador = new Programador();

//$programador->setNombre("nombre1");
//$programador->lenguajes("lenguajes");
//$programador->setNombre("Nombre2");

//$persona->setVelocidad(2444);
var_dump($programador);

