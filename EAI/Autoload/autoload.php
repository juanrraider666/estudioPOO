<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 14/03/2019
 * Time: 4:04 PM
 */
function autocarga_class($class){
    require_once $class. '.php';

}

spl_autoload_register('autocarga_class');