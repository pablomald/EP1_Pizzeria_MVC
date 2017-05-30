<?php
require_once("Database.php");
class Productoe {
  public $id;

	public function __construct($id) {
      $this->id = $id;
  }

  public function eliminar(){
    $db=New Database();
    $sql="DELETE from producto where id=$this->id";
    $db->query($sql);
    $db->close();
  	return true;
  }

}
