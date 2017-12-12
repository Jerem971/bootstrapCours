<?php
session_start();
$_SESSION['nom']         ="";
$_SESSION['prenom']      ="";
$_SESSION['password']    ="";
$_SESSION['identifiant'] ="";
session_destroy();
header('location: ../index.php?message=4');
?>