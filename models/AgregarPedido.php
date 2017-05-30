<?php
require_once("Database.php");
class AgregarPedido {
	public $pedi_id;
	public $pro_id;
	public $cantidad;

	public function __construct($pedi_id, $pro_id, $cantidad) {
      $this->pro_id = $pro_id;
			$this->pedi_id = $pedi_id;
	    $this->cantidad = $cantidad;
  }
	//mysqli->insert_id
	// return rows
	public function agregar(){
		$db=new Database();		

		$sql=" INSERT INTO
							pedido_producto(id,pedido_id,producto_id,cantidad)
					VALUES(
								0,
								$this->pedi_id,
								$this->pro_id,
								$this->cantidad
					)
					";
					echo $sql;
	$db->query($sql);
	$lastId = (int)$db->mysqli->insert_id;
	$db->close();
	}
}
