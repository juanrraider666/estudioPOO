<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 3:38 PM
 */

namespace Miclase;
class User{
    public $nombre;

    /**
     * User constructor.
     * @param $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }


}