<?php
    require_once ("ClassMesa.php");

    $objCama = new Producto("cama", 10202);
    $arrInfoProducto = $objCama->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('</pre>');

    $objMueble = new mueble("closet", 10000,"casita","Cafe","madera");
    $arrInfoMueble = $objMueble->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMueble);
    print_r('</pre>');

    $objMesa = new Mesa("Mesa de noche", 10000, "Nochesita", "negro", "plastico", "3mt");
    $objMesa->setForma("Redonda");
    $arrInfoMesa = $objMesa->getInfoProducto();


    print_r('<pre>');
    print_r($arrInfoMesa);
    print_r('</pre>');

?>
