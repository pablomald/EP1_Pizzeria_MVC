<?PHP
session_start();
if(isset($_POST['funcion'])) {
	require_once("../models/Client.php");
	$clientes = json_decode($_POST['clientes']);
	foreach ($clientes as $item) {
		$cliente = new Client($item->_nombre,$item->_direccion,$item->_telefono);
		$cliente->save();
	}
}else if(isset($_POST['buscar'])){
		require_once("../models/clientBuscar.php");
		$clientes = json_decode($_POST['prebuscar']);
		foreach ($clientes as $item){
		$cliente = new ClientBuscar($item->_nombre,$item->_telefono);
		$cliente->buscar();
		}

	}else {
		include_once("models/Client.php");
		$clientes = Client::get();
	}
