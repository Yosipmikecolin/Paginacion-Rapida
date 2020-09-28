<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Paginacion</title>
   <link rel="stylesheet" type="text/css" href="../Css/estilos.css">

</head>
<body class="text-center">

<h2>Prueba nuestra paginacion Ultra rapida<br>
Para darte la mejor experiencia</h2>


<?php
include "Vista_Peliculas.php";
$Peliculas = new Peliculas(3);

?>



<div class="paginacion d-flex justify-content-center">
<?php

$Peliculas->MostrarPaginas();

?>


</div>


<div class="container">


<?php
$Peliculas->MostrarPelis();
?>


</div>



<script src='../Js/javascript.js'></script>

</body>
</html>