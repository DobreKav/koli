<?php
class ModeliDAO extends Modeli
{
	//class members/attributes
	private $table_name ="modeli";//mySQL
	private $db_conn	=	null;
	//construct
	public function __construct($DB){
		$this->db_conn=$DB;
	}
	//methods -> CRUD mySQL
	//getters
	public function insertModeli(){
		$model_name	=	parent :: getModel_name();
		$color	=	parent :: getColor();
		$fuel	=	parent :: getFuel();
        $price  =   parent :: getPrice();
		$marki_id  =   parent :: getMarki_id();
		//columns table_name=modeli
		$columns_name="model_name,color,fuel, price, marki_id";
		$columns_value="'$model_name','$color','$fuel','$price','$marki_id'";
		$this->db_conn->insertRow($this->table_name,$columns_name,$columns_value);
	}
	public function deleteModeli(){
		$model_id	=	parent :: getModel_id();
		$this->db_conn->deleteRow($this->table_name, "model_id" , $model_id);
	}
	public function updateModeli(){
	
		$model_name	=	parent :: getMmodel_name();
		$color		=	parent :: getColor();
		$fuel		=	parent :: getFuel();
		$price		=	parent :: getPrice();
		$marki_id 	=   parent :: getMarki_id();
		$model_id	=	parent :: getModel_id();
	}
	public function selectModeli(){
		return $this->db_conn->selectRow($this->table_name);
	}

}

?>