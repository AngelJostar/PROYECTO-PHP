<?php

    require_once("ClassOperacion.php");

    $objRaiz = new calcular();

    echo $objRaiz->raiCuadrada(2);
    echo "<br>";
    echo $objRaiz->potencia(40, 2);

    echo "<br>";
    echo $objRaiz->op_basicas(40, 2, '-');

?>