<?php
require_once("Database.php");
class Productom {
  public $id;
	public $name;
	public $price;
	public $category;
	public $description;

	public function __construct($id,$name, $price, $category, $description) {
      $this->id = $id;
      $this->name = $name;
			$this->price = $price;
	    $this->category = $category;
	    $this->description = $description;
  }

  public function modificar(){
    $db=New Database();
    $sql="UPDATE producto set nombre='".$this->name."', precio=$this->price,
    categoria_id=$this->category, descripcion='".$this->description."'
    where id=$this->id";
    $db->query($sql);
    $db->close();
  	return true;
  }

}
