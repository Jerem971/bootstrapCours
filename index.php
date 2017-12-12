<?php 
session_start();
include('modele/bddConnect.php');
if(isset($_GET['langue'])){
	$langue='include/string_'.$_GET['langue'].'.php'; //processus pour dynamiser les langues 
	$_SESSION['langue']=$_GET['langue'];
	include($langue);
	
}elseif(isset($_SESSION['langue'])){
	$langue='include/string_'.$_SESSION['langue'].'.php';
	//include($langue);
	
}else{
	include('include/string_fr.php');
}
//include ('include/string_fr.php');
define ('NAME','Jerem');
include('include/header.php');
$titre="MSIA161";
include('include/entete.php');
include('include/services.php');
include('include/menu.php');



?>

  
<?php 
	include('include/portfolio.php');
	include('include/about.php');
	include('include/team.php');
	include('include/client.php');
	include('include/contact.php');
?>


    <!-- Formulaire connexion-->
	
<div class="modal" id="Connexion" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="modele/connexion.php">
			<div class="form-row">
				<div class="col">
					<input type="text" class="form-control" name="identifiant"  id="id" placeholder="<?php echo IDENTIFIANT ; ?>">
				</div>
				<div class="col">
					<input type="password" class="form-control" name="password"  id="id" placeholder="<?php echo PASSWORD ; ?>">
				</div>
			</div>
		<div class="modal-footerMargin">
			<div class="modal-footer">
				<input type="submit" class="btn btn-success" value="Valider">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
	  </div>
	  </form>
    </div>
  </div>
</div>
</div>

    <!-- Formulaire inscription-->
	
	<div class="modal" id="Inscription" tabindex="-1" role="dialog" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="modele/inscription.php">
			<div class="form-row">
				<div class="col">
					<input type="text" class="form-control" name="id"  placeholder="Email*" >
				</div>
				<div class="col">
					<input type="password" class="form-control" name="password" placeholder="Password*" >
				</div>
			</div>
		 <div class="modal-footerMargin">
			<div class="modal-footer">
				<input type="submit" class="btn btn-success" value="Valider">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			</form>
	  </div>
    </div>
  </div>
</div>
</div>

 


<div class="modal" id="Deconnexion" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="modele/deconnexion.php">
			<div class="modal-body">
				<p>Voulez vous vraimment vous deconnecter ?</p>
			</div>
			
      <div class="modal-footer">
         <input type="submit" class="btn btn-success" value="Valider">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>
</div>

    

    

    
<?php include('include/footer.php'); ?>
  </body>

</html>
