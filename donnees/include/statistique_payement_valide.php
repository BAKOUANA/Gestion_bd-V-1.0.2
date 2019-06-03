	<?php 
		require_once('db.php'); 
		 	  
	?>
  

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>statistique Payements Validés</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_bd.css" />
	
	<script src="../js/jquery-3.4.0.min.js"> </script>
    <script src="../js/bootstrap.min.js"> </script>
	
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
							<li> <a href="../../index.php">Accueil</a> </li>
							 
							<li class="active"> <a href="#">Statistiques</a> </li>
						  </ul>						   
						</div>
					  </div>
				</nav>
			</header>
		<div class="container">
        <!-- le corps -->		
			<h5 class="card-title"><i class="fa fa-fw fa-search"></i> <marquee>Statistiques Payements Validés </marquee> </h5>
			
			
			<?php  
				require_once('formulaire_recherche.php');	  
			?>
	
	<!-- table generale-->	
	 
			<table class="table table-striped table-bordered">
					<thead>
						<tr class="bg-primary text-white">
							<th> </th>
							 
							<th>100 Fcfa</th>
							<th>300 Fcfa</th>
							<th>800 Fcfa</th>
							<th>4500 Fcfa</th>
							<th>Total</th>
							 
						</tr>
					</thead>
					<tbody>
						<?php 
							echo "Nombre / Montant";
							include_once('info_statistique_payement valide.php');

						?>
						
						 
						
					</tbody>
		</table>
		<!-- fin Table -->
		 
    </div>
	
	<?php 
		 require_once('footer.php');	  
	?>
	
</body>
</html