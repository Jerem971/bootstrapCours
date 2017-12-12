 <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
		  <?php 
				if(isset($_GET['message'])){
					$message=$_GET['message'];
					
					switch($message){
						case 1:
						if(isset($_SESSION['identifiant']))
						{
							$message=$_SESSION['identifiant'];
						}else{
							$message="Vous devez vous connecter";
						}
						
						break;
						
						case 2:
						$message="Vous etes bien connecté";
						break;
						
						case 3:
						$message="Erreur d'identification";
						break;
						
						case 4:
						$message="Bienvenue sur mon portfolio";
						break;
						
						case 5:
						$message="Bienvenue admin";
						break;
					}
				}else{
						$message="Bienvenue sur mon portfolio";
				}
		  ?>
          <div class="intro-heading text-uppercase"> <?php echo $message?></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>