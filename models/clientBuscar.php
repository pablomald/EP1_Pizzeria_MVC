<?php
class ClientBuscar {
	public $name;
	public $numero;

	public function __construct($name,$numero) {
      $this->name = $name;
			$this->numero = $numero;
  }


  public function buscar(){
    $sql = " SELECT
                *
              FROM
                cliente where nombre='".$this->name."' and  telefono=$this->numero
            ";
    //$db = new Database();
    $db = mysqli_connect("localhost","root","","pizzeria");
    $result = mysqli_query($db, $sql);
    if($row = mysqli_fetch_array($result)){
    session_start();
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['id'] = $row['id'];		
    }else{
      echo "no";

    }
  }

}
