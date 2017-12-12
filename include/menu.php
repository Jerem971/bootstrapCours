
 <body id="page-top">
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo START_BOOTSTRAP ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?langue=en">Anglais</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?langue=fr">Français</a>
            </li>
			<?php
			if(isset($_SESSION['identifiant'])){
				
					if($_SESSION['identifiant']=="admin"){?>
						<li class="nav-item">
						  <a class="nav-link js-scroll-trigger"  href="admin/admin_index.php">Admin </a>
						</li>
						<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Deconnexion" href="#">Deconnexion </a>
						</li>
					<?php }else{
							
						$message="fdddd";
							?>
							<li class="nav-item">
							  <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Connexion" href="#"><?php echo $message; ?> </a>
							</li>
							<li class="nav-item">
							  <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Deconnexion" href="#">Deconnexion </a>
							</li>
							<?php 
					}
			} else{ ?>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Connexion" href="#">Connexion </a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Inscription" href="#">Inscription </a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#Deconnexion" href="#">Deconnexion </a>
            </li>
				
			<?php } ?>
			
			
			
            
          </ul>
        </div>
      </div>
    </nav>