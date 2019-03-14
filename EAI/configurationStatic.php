<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 13/03/2019
 * Time: 5:09 PM
 */

class configurationStatic
{

    //metodo estatico y propieda estatica nos permite acceder mas rapido al objeto sin necesidad de instanciar
    public  static $color;

    /**
     * @return mixed
     */
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * @param mixed $color
     */
    public static function setColor($color)
    {
        self::$color = $color;
    }


}