<?php
if(isset($_GET))


switch($page){
case 1: 
$p="chemin/aceuil";
break;
case 2:
$p="chemin/presentation";
}

include("include/entete.php");
include($lapage);