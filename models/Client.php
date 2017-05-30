<?php

require_once 'Database.php';

class Client {
	public $name;
	public $numero;
	public $direccion;

	public function __construct($name,$direccion,$numero) {
      $this->name = $name;
	    $this->direccion = $direccion;
			$this->numero = $numero;
  }

	// return rows
	public function save() {
		$db = new Database();
		$sql = "INSERT INTO
						 	cliente(nombre, direccion, telefono)
					VALUES(
									'".$this->name."',
									'".$this->direccion."',
									$this->numero
								)
					";
		$db->query($sql);
		$lastId = (int)$db->mysqli->insert_id;
		echo $lastId;
		$db->close();
		return true;
	}
	static function get() {
		$sql = " SELECT
		 						*
							FROM
								cliente
						";
		$db = new Database();
		if($rows = $db->query($sql)) {
			return $rows;
		}
		return false;
	}

	static function buscar(){
		$sql = " SELECT
		 						*
							FROM
								cliente where nombre='".$this->name."' && telefono=$this->numero
						";
		$db = new Database();
		if($rows = $db->query($sql)) {
			return true;
		}
	}

}
