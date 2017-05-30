<?php
if(isset($_POST['agregar'])){
	require_once("../models/AgregarPedido.php");
	require_once("../models/Cleaner.php");
	$productos = json_decode($_POST['agregarpedido']);
	$pedidoid = $_POST['idpedido'];
	foreach ($productos as $item){
	$producto = new AgregarPedido($pedidoid,$item->_idpro,$item->_cantidad);
	$producto->agregar();
}

} else {
}
