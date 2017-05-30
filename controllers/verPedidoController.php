<?php
if(isset($_POST['verpedido'])){
	require_once("../models/VerPedido.php");
	$productos = json_decode($_POST['verpedido']);
	foreach ($productos as $item){
	$producto = new VerPedido($item->_id);
	$producto->ver();
	return$producto->ver();
	}

}
