<?php
require_once '../../lib/db.php';
$DB = new DB();
//marki
//popo marki
//dao marki
$table_name="marki";
print_r("testt");
switch($table_name)
{
	case "marki":
        require_once 'popo/marki.php';
        require_once 'dao/marki_dao.php';
        //instance
        $objMarki = new MarkiDAO($DB);
		$result = $objMarki->selectMarki();//DAO ->CRUD
		var_dump($result);
        echo $jsonformat = json_encode($result);
        // var_dump($jsonformat);
    break;

//-----------------------------------------------

	case "modeli":
        require_once 'popo/modeli.php';
        require_once 'dao/modeli_dao.php';
        //instance

        $objModeli = new ModeliDAO($DB);
		
        $result = $objModeli->selectModeli();//DAO ->CRUD
        //-----------------------------------------------
    break;
    case "salon":
        require_once 'popo/salon.php';
        require_once 'dao/salon_dao.php';
        //instance
        $objSalon = new SalonDAO($DB);
        
        $result =$objSalon->selectSalon();//DAO ->CRUD
        //-----------------------------------------------
    break;

    default:
         echo"Ne postoi takva tabela";
    break;

    }
?>