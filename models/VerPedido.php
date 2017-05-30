<?php
require_once("Database.php");
class VerPedido {
  public $id;
	public function __construct($id) {
      $id->id = $id;
  }
	//mysqli->insert_id
	// return rows
	static function ver1($id){
		$sql=" SELECT * FROM pedido_producto where pedido_id=$id";
	$db->query($sql);
  if($rows = $db->query($sql)){
    return $rows;
  }
  return false;
 }

}
