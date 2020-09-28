<?php

class Base_datos{



private $servidor;
private $usuario;
private $contraseña;
private $basedatos;






function __construct(){


$this-> servidor="localhost";
$this-> usuario="root";
$this-> contraseña="";
$this-> basedatos="peliculas";


}





function Conectar(){


try {
    
$sql="mysql:host=".$this->servidor. ";dbname=".$this->basedatos;
$pdo= new PDO($sql,$this->usuario,$this->contraseña);
return $pdo;

} catch (PDOException $e) {
    
echo "Error en: ".$e->getMessage();

}


}


}








?>