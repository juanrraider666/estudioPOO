<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 11:33 AM
 */
class Hombre{

    private $apellido;

    public function __construct($apellido)
    {
        $this->apellido  = $apellido;
    }

    //LO UTILIZAMOS PARA VER SI UN METODO NO EXISTE, Y SI EXISTE RETORNAR LO QUE PIDA EL METODO



 /*
  * EN ESTE CASO MANDAMOS UN METODO ($NAME)
  */
public function __call($name, $arguments)
{
 //substr tres primeras letras del metodo llamado
    $nombre_me = substr($name,0,3);

    if($nombre_me == 'get'){
        //strtolowe = convertir en minuscula
        //substr = recorte el string 3 pirmeras letras del string
        $nombre_prefix = substr(strtolower($name),3);

//        if(!isset( $this->$nombre_prefix)){
//            return "1el metodo no existe";
//        }
        return $this->$nombre_prefix;

    }else{
        return "2el metodo no existe";
    }
   // return $nombre_prefix;
    //return "no existe el metodo";
    // TODO: Implement __call() method.
}

}

$perona = new Hombre("juan");
echo $perona->getApellido();//NO EXISTE PERO SE MANDA AL METODO CALL PARA VERIFICAR
echo $perona->sets();

