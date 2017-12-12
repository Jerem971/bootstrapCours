<?php
/*
define ("DBSERVER","localhost");
define ("DBNAME","bdd");
define ("DBLOGIN","root");
define ("DBPASSWORD","");


try{
	$bdd=new PDO('mysql:host'.DBSERVER.'; dbname='.DBNAME,DBLOGIN,DBPASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}catch(Exeption $e){
	die('Erreur :'.$e->getMessage().'<br>Numero erreur depuis connect_db.php : '.$e->getCode());
}*/

$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');

?>