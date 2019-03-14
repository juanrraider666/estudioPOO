<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 11:09 AM
 */



class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "juan";
        $this->email = "email";
echo "instancia del objeto creada.</br>";

    }


    public function __toString()
    {
        //interpolacion de variables
        return "hello {$this->nombre}, como estas? ";
        // TODO: Implement __toString() method.
    }

    //Destruyendo el objeto
    public function __destruct()
    {
        echo  "instancia del objeto destruida.</br>";
        // TODO: Implement __destruct() method.
    }

}



$usuario = new Usuario();
echo $usuario; // con el Tostring evitamos un error para eso implementamos este metodo
echo $usuario->email."</br>";


//CAPTURANDO ERRORES

try   {
    if(isset($_GET['id'])){
        echo "el id es {$_GET['id']}";
    }else {


        throw new Exception('Sorry error! ');
    }
}catch (Exception $exception){

    echo "No se cumplio la condicion: ".$exception->getMessage();
}