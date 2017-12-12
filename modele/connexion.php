<?php
session_start();
include('bddConnect.php');
$ident=htmlspecialchars($_POST['identifiant']);
$pass= htmlspecialchars($_POST['password']);


$sql="SELECT id,prenom,password,email FROM user WHERE email='".$ident."' AND password='".$pass."' ";
$req=$bdd->prepare($sql);
$req->execute(); 
$result=$req->fetch(PDO::FETCH_OBJ);

/*$sql="SELECT id_admin,admin_tbl.id_secteur,titre FROM admin_tbl LEFT JOIN secteurs_tbl ON admin_tbl.id_secteur where id_user='".$result->id_user."'");
$req=$bdd->prepare($sql);
$req->execute(); 
$result=$req->fetch(PDO::FETCH_OBJ);*/
 
if($result->id >= 1){

	//$_SESSION['nom']         =  $result->name;
	$_SESSION['prenom']      =  $result->prenom;
	$_SESSION['password']    =  $result->password;
	$_SESSION['identifiant'] =  $result->email;
	
	if($_SESSION['identifiant']=="admin" && $_SESSION['password']="admin"){
		header("location: ../index.php?message=5");
	}else{
		header("location: ../index.php?message=2");
	}
}else{
	header("location: ../index.php?message=3");
}

//echo utf8_decode($result->prenom.''.$result->name.',vous etes bien connecté.');

?>