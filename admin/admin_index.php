<?php
//echo 'Vous êtes dans la console d\'administration';

include('includes/admin_entete.php');
include('includes/admin_menu.php');
if(isset($_GET['page'])){
	include('includes/'.$_GET['page'].'.php');
}else{
	include('includes/admin_content.php');
}
include('includes/charts.php');
include('includes/admin_footer.php');
?>