<?php

session_start();
//include('..\modele\bddConnect.php');
$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');

$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
$recupID=$_POST['identifiant'];
$recupPass=$_POST['password'];
$recupname=$_POST['nom'];
$recupAdmin=$_POST['admin'];
$recupSecteur=$_POST['secteur'];

echo $recupID." ".$recupPass;

$sql="INSERT INTO  user (email,password,name,id_admin,id_secteur) VALUES ('".$recupID."','".$recupPass."','".$recupname."','".$recupAdmin."','".$recupSecteur."') ";
$req=$bdd->prepare($sql);
$req->execute(); 
$result=$req->fetch(PDO::FETCH_OBJ);
header("location: ../tables.php");
?>