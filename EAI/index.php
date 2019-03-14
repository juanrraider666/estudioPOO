<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 13/03/2019
 * Time: 5:08 PM
 */

/*
 * STATIC
 */
require_once 'configurationStatic.php';

configurationStatic::setColor("blue");
configurationStatic::getColor();

echo configurationStatic::$color."</br>";



//igual se puede instanciar
$configuarcion = new configurationStatic();
$configuarcion::$color="otra forma black";
$configuarcion::$color;
var_dump( $configuarcion);


