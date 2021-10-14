<?php

    require_once ("ClassUsuario.php");

    $objUsuarioUno = new usuario("Andres Cardona", "angel@ciencias.unam", "Admin");
    $objAndreaa = new usuario("Andra","andrea@ciencias.unam.mx", "Cliente");

    echo $objUsuarioUno->getPerfil();

    echo "<br><br>";

    echo $objAndreaa->getPerfil();
    $objAndreaa->setCambiarClave("1245");

    echo "<br><br>";
    echo $objAndreaa->getPerfil();
    



?>