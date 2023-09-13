<?php
$table_name="markii";
switch($table_name){
	case "model":
		require_once "model/popo/model.php";
		require_once "model/dao/model_dao.php";
		//........
		
		//...insertModeli();//DAO
	break;
	case "marki":
		require_once "model/popo/marki.php";
		require_once "model/dao/marki_dao.php";
		//........
	break;
	default:
		echo "Tabelata ne postoi";
	break;
}
?>