<?php
session_start();
include('bddConnect.php');

$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
$recupID=$_POST['id'];
$recupPass=$_POST['password'];
echo $recupID." ".$recupPass;

$sql="INSERT INTO  user (email,password) VALUES ('".$recupID."','".$recupPass."') ";
$req=$bdd->prepare($sql);
$req->execute(); 
$result=$req->fetch(PDO::FETCH_OBJ);

	//$_SESSION['nom']         =  $result->name;
	$_SESSION['prenom']      =  $result->prenom;
	$_SESSION['password']    =  $result->password;
	$_SESSION['identifiant'] =  $result->email;
header("location: ../index.php?message=2");



?>
