<?php
class MarkiDAO extends Marki
{
	//class members/attributes
	private $table_name ="marki";//mySQL
	private $db_conn	=	null;
	//construct
	public function __construct($DB){
		$this->db_conn=$DB;
	}
	
	//methods -> CRUD mySQL
	//getters
	public function insertMarki(){
		$marka_name	=	parent :: getMarka_name();
		$country	=	parent :: getCountry();
		$salon_id	=	parent :: getSalon_id();
		//columns table_name=marki
		$columns_name="marka_name,country,salon_id";
		$columns_value="'$marka_name','$country','$salon_id'";
		$this->db_conn->insertRow($this->table_name,$columns_name,$columns_value);
	}
	
	public function deleteMarki(){
		$marki_id	=	parent :: getMarki_id();
		$this->db_conn->deleteRow($this->table_name, "marki_id" , $marki_id);
	}
	public function updateMarki(){
	
		$marka_name	=	parent :: getMarka_name();
		$country	=	parent :: getCountry();
		$salon_id	=	parent :: getSalon_id();
		$marki_id	=	parent :: getMarki_id();
		
	}
	public function selectMarki(){
		return $this->db_conn->selectRow($this->table_name);
	}

}


?>