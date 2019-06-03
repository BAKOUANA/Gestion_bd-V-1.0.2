	<?php 
		include_once('donnees/include/db.php'); 
	  	
	?>
  

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Unicom BD @</title>
    <link href="donnees/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="donnees/css/style_bd.css" />
	
	<script src="donnees/js/jquery-3.4.0.min.js"> </script>
    <script src="donnees/js/bootstrap.min.js"> </script>
	
</head>
<body>

		<!--entete de la page -->
			<header>	
				<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <a class="navbar-brand" href="#" style="padding-left:50%;">Unicom BD @ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						  <ul class="nav navbar-nav" style="padding-left:20%;">
							<li class="active"><a href="index.php">Accueil</a></li>				 
							 
							<li> <a href="donnees/include/statistique_payement_valide.php">Statistiques</a> </li>
						  </ul>						   
						</div>
					  </div>
				</nav>
			</header>
			
		<div class="container">
        <!-- le corps -->
		
				<h5 class="card-title"><i class="fa fa-fw fa-search"></i> <marquee>Informations </marquee> </h5>
				
		
				<?php  
					require_once('donnees/include/formulaire_recherche.php');	  
				?>
			 
			<!-- table generale-->	
			 
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="bg-primary text-white">
							<th> </th>
							<th>Tel</th>
							<th>Operateur</th>
							<th>Montant</th>
							<th>Transaction Status</th>
							<th>Date Heure</th>
							 
						</tr>
					</thead>
					<tbody>
						<?php 
						if ($niveau=='all')
							include_once('donnees/include/info_general.php');
						
						if ($niveau=='succes')
							include_once('donnees/include/info_payement_valide.php');
						
						if ($niveau=='echec')
							include_once('donnees/include/info_payement_non_valide.php');
						
						//partie montant
						echo "Montant";
						include('donnees/include/montant.php');
						?>			
 				
					</tbody>
		</table>
		<!-- fin Table --> 
	
			<?php 
				//partie montant
				 include('donnees/include/montant.php');	  
			?>
		
    </div>
	
	<?php 
		 require_once('donnees/include/footer.php');	  
	?>
	
</body>
</html