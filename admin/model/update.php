<?php
require_once '../../lib/db.php';
$DB = new DB();
//marki
//popo marki
//dao marki
require_once 'popo/marki.php';
require_once 'dao/marki_dao.php';
//instance
$objMarki = new MarkiDAO($DB);
$marki_name = "Audi";
$country = "DE";
$eu     = "1";
$marki_id ="1";
$objMarki->setMarki_name($marki_name);//popo
$objMarki->setCountry($country);//popo
$objMarki->setEu($eu);//popo
$objMarki->setMarki_id($marki_id);//popo
$objMarki->updatetMarki();//DAO ->CRUD
//-----------------------------------------------


require_once 'popo/modeli.php';
require_once 'dao/modeli_dao.php';
//instance
$objModeli = new ModeliDAO($DB);
$model_name = "A4";
$color      = "Black";
$fuel       = "Disel";
$price      = 35000;
$marki_id   = "23";
$modeli_id  = "1";
$objModeli->setModel_name($model_name);//popo
$objModeli->setColor($color);//popo
$objModeli->setFuel($fuel);//popo
$objModeli->setPrice($price);//popo
$objModeli->setMarki_id($marki_id);//popo
$ibjModeli->setModel_id($modeli_id);
$objModeli->updateModeli();//DAO ->CRUD
//-----------------------------------------------

require_once 'popo/salon.php';
require_once 'dao/salon_dao.php';
//instance
$objSalon = new SalonDAO($DB);
$objSalon->setCity($city);//popo
$objSalon->setAddress($address);//popo
$objSalon->setTel($tel);//popo
$objSalon->setSalon_id($salon_id);
$objSalon->updateSalon();//DAO ->CRUD
//-----------------------------------------------



?>