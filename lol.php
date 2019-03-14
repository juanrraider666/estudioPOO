<?php
//molde para crear mas objetos de tipo coche con caracteristicas parecidas
class Coche{
//ATRIBUTOS O PROPIEDADES(VARIABLES), CASI SIEMPRE DEBEN SER PRIVADAS

    public  $color ;
    public  $modelo ;
    public  $velocidad ;
    public  $marca;

    /**
     * Coche constructor.
     * @param string $color
     * @param string $modelo
     * @param int $velocidad
     * @param $marca
     */
    public function __construct(string $color, string $modelo, int $velocidad, $marca)
    {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->marca = $marca;
    }


    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }


    public function Acelerar(){

  $this->velocidad++;
    }

    public function Frenar(){

        $this->velocidad--;

    }

    public  function getVelocidad(){

        return $this->velocidad;
    }

    public  function setVelocidad(int $velocidad){

        return $this->velocidad = $velocidad;
    }

    //TIPADO:: EXIGE COLOCAR EL TIPO DE DATO
    public  function mostrarCarro(Coche $carrro){
        if(is_object($carrro)){
            $mostrar = $carrro->modelo;
            $mostrar .= $carrro->color;
            $mostrar .= $carrro->velocidad;
        }


        return $mostrar;


    }

    //Métodos son acciones que hacen el objeto  antes funciones


}
//HERENCIA
class Persona {
    public $Nombre;
    public  $Apelldos;

public function __construct()
{
    $this->Nombre = "Nombre desde el padre";
}

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getApelldos()
    {
        return $this->Apelldos;
    }

    /**
     * @param mixed $Apelldos
     */
    public function setApelldos($Apelldos)
    {
        $this->Apelldos = $Apelldos;
    }
    public function Hablar(){
        return "estoy Hablando";
    }

}

class Programador extends Persona {
    public $lenguajes;
    public $programar;

//HEREDAR CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->lenguajes("lenguajesdesdeleconstructor");
        $this->Programar();


    }

    public function Programar(){
       return $this->programar   =  "estoy programando";
    }

    public function lenguajes($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }



}











//POO

$coches = new Coche("color","modleo",2,"marca");
$coche2 = new Coche("color","modelo",22,"marca");
//$coche2 = new Coche();

// $coche->velocidad = 1222;
// $coche2->setVelocidad(6666);


 //TIPADO:
$mostrar = $coche2->mostrarCarro($coches);



// $coche->setColor("negro");
 //echo 'lol'.$coche->getColor().'</br>';
//$coche2->setColor("azul oscuro");
 //var_dump($coche2);
 var_dump($mostrar);
var_dump($coche2);

//$coche->Acelerar();
//$coche->Acelerar();
// echo $coche->getVelocidad();

