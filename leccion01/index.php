<?php

    require_once ("ClassOperacion.php");

    $operacion1 = new Operacion(10,20);
    $operacion2 = new Operacion(200,400);

    $totalSuma = $operacion1->getSuma();
    $totalResta = $operacion1->getResta();

    // echo $totalResta;
    // echo "<br>";
    // echo $totalSuma;

    $totalSuma = $operacion2->getSuma();
    $totalResta = $operacion2->getResta();
    
    // echo $totalResta;
    // echo "<br>";
    // echo $totalSuma;

?>