<?php
if( isset($_POST['funcion']) ) {
	require_once("../models/Product.php");
	require_once("../models/Cleaner.php");
	//echo 'Hola AJAX '.$_POST['funcion'];
$productos = json_decode($_POST['productos']);
foreach ($productos as $item){
$nombre = Cleaner::cleanInput($item->_nombre);
 $producto = new Product($item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
 $producto->save();
 
}

}else if(isset($_POST['modificar'])){

	require_once("../models/Productom.php");
	require_once("../models/Cleaner.php");
	$productos = json_decode($_POST['productos2']);
	foreach ($productos as $item){
	$producto = new Productom($item->_id,$item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
	$producto->modificar();
	}

}else if(isset($_POST['eliminar'])){
	require_once("../models/productoe.php");
	require_once("../models/Cleaner.php");
	$productos = json_decode($_POST['preliminar']);
	foreach ($productos as $item){
	$producto = new Productoe($item->_id);
	$producto->eliminar();
	}

} else {
	include_once("models/Product.php");
	$productos = Product::get();
}
