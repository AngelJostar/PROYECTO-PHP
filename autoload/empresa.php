<?php 

	// require_once ("ClassEmpleado.php");
	// require_once ("ClassCliente.php");
	require_once("autoload.php");

	$objEmpleado = new Empleado(78978,"Andres Pérez",25);
	$objEmpleado->setPuesto("Administrador");
	$objEmpleado->setMensaje("Bienvenido empleado");


	echo $objEmpleado->getMensaje();
	echo $objEmpleado->getDatosPersonales();
	echo "Puesto:".$objEmpleado->getPuesto();

	echo "<br>";
	$objCliente = new Cliente(434543,"Elena Castillo",20);
	$objCliente->setCredito(1000);


	echo $objCliente->getDatosPersonales();
	echo "Créditos:".$objCliente->getCredito();
	echo "<br>";
	$objCliente->setMensaje("Bienvenido cliente ");
	echo $objCliente->getMensaje();



 ?>