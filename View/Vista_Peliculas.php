<?php

include "../Database/base.php";


class Peliculas extends Base_datos{


private $TotaldePeliculas;
private $TotaldePaginas;
private $indice;
private $Npaginas;
private $PaginaActual;






function __construct($paginas){
parent::__construct();

$this-> PaginaActual=1;
$this-> Npaginas=$paginas;
$this-> indice=0;

}






//METODOS



function MostrarPelis(){
    
    $this->indice=($this->PaginaActual-1)*$this-> Npaginas;
  
   

    $sql=$this->Conectar()->prepare("SELECT * FROM pelicula LIMIT  $this->indice, $this->Npaginas");
    $sql->execute();
    

    while($pelis = $sql->fetch()){

    include "Vista.php";

}

 }


















public function MostrarPaginas(){




    if(isset($_GET["var"])){
        
        
        $this->PaginaActual=$_GET["var"];

    }


    $sql= $this->Conectar()->query("SELECT COUNT(*) AS total FROM pelicula");

    //TOTAL DE PELICULAS
    $this-> TotaldePeliculas=$sql->fetch(PDO::FETCH_OBJ)->total;

    // TOTAL DE PAGINAS
     $this->TotaldePaginas = ceil($this-> TotaldePeliculas/ $this->Npaginas);

    $actual="";

    echo "<ul class='pagination pagination-sm'>";

    for($i=1;$i<=$this->TotaldePaginas ; $i++){

        if($i==$this->PaginaActual){

        $actual="active";

        }else{

            $actual="";

        }


        echo "<li class='page-item $actual'><a href='?var=$i' class='page-link'>$i</a></li>";
        
    }



    echo "</ul>";












 
}







 

}
?>