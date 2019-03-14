<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 3:38 PM
 */
class Categoria{
    public $NombreCategoria;

    /**
     * Categoria constructor.
     * @param $NombreCategoria
     */
    public function __construct($NombreCategoria)
    {
        $this->NombreCategoria = $NombreCategoria;
    }


}