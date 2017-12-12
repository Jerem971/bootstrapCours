<?php
$ident=htmlspecialchars($_POST['identifiant']);
$pass= htmlspecialchars($_POST['password']);
$nom=htmlspecialchars($_POST['nom']);
$admin= htmlspecialchars($_POST['admin']);
$secteur=htmlspecialchars($_POST['secteur']);

$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');

$reqSelect="SELECT id from user where email='".$ident."' and password='".$pass."'";
$req=$bdd->prepare($reqSelect);
$req->execute(); 
$result=$req->fetch(PDO::FETCH_OBJ);
 if(/*isset($result->id)*/ $result == null){
	 

echo $result->id;
echo "fgfdgdfgffd";
$sql="Update user SET email='".$ident."', password='".$pass."' , name='".$nom."',id_admin='".$admin."',id_secteur='".$secteur."' Where id='".$result->id."'";
$req2=$bdd->prepare($sql);
$req2->execute(); 
 }
 else{
	 echo "non";
 }
//header("location: ../tables.php");

?>