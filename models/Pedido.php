<?php
require_once("Database.php");
class Pedido {
  public $id;

	public function __construct($id) {
      $this->id = $id;
  }

  public function crear(){
    $db=New Database();
    $sql=" INSERT INTO
        pedido(fecha,cliente_id,estado)
					VALUES(
								now(),
								$this->id,
								'pendiente'
					)
					";
    $db->query($sql);
    $lastId = (int)$db->mysqli->insert_id;
  	$db->close();
  	return $lastId;
  }

}
