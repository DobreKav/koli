<?php

require_once '../../lib/db.php';
$DB = new DB();
//marki
//popo marki
//dao marki
//marki
//popo marki
//dao marki
require_once 'popo/marki.php';
require_once 'dao/marki_dao.php';
//instance

$objMarki = new MarkiDAO($DB);
$marki_id = 22;
$objMarki->setMarki_id($marki_id);//popo
$objMarki->deleteMarki();//DAO ->CRUD
//-----------------------------------------------


require_once 'popo/modeli.php';
require_once 'dao/modeli_dao.php';
//instance
$objModeli = new ModeliDAO($DB);
$modeli_id = 1;
$objModeli->setModel_id($modeli_id);
$objModeli->deleteModeli();//DAO ->CRUD
//-----------------------------------------------

require_once 'popo/salon.php';
require_once 'dao/salon_dao.php';
//instance
$objSalon = new SalonDAO($DB);
$salon_id = 1;
$objSalon->setSalon_id($salon_id);
$objSalon->deleteSalon();//DAO ->CRUD
//-----------------------------------------------


?>