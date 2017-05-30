<?php
if(isset($_POST['crear'])){
	require_once("../models/Pedido.php");
	$productos = json_decode($_POST['crearpedido']);
	foreach ($productos as $item){
	$producto = new Pedido($item->_id);
	$producto->crear();
  echo $producto->crear();
	}

} else {
}
