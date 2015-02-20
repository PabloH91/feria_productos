<?php 
try{
	  require_once'../receta/MiConeccion.php';
	  error_reporting(0);
}catch(Exception $e){
	  $error = $e->getMessage();	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
		
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="brands_products"><!--brands_products-->
							<h2>Tipo de Receta</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                	<?php
										if (isset($error)) {
										  echo "<p>$error</p>";
									    } else {
										  $sql = "SELECT * FROM tiporeceta";
										  $result = mysqli_query($db,$sql);	
										  
										  while($mostrar = mysqli_fetch_assoc($result)){
										  	echo '<li><a href="?id='. $mostrar['tipoRecetaID'] .'"> <span class="pull-right">(50)</span>'. $mostrar['descReceta'] .'</a></li>';	
											}
										}
									?>
								</ul>
							</div>
						</div><!--/brands_products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right"><img src="" 
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php 
						if (isset($error)) {
							echo "<p>$error</p>";
						} else {
							if($_GET['id']){
							$sql = "SELECT `tipoRecetaID`, `tipo` FROM `recetas`,`tiporeceta` WHERE `descReceta` = `tipo` AND `tipoRecetaID` = $_GET[id]";
							$result = mysqli_query($db,$sql);	
						  
							  while($mostrar = mysqli_fetch_assoc($result)){
								  include('soloRecetas.php');
							  }
						   } else  {
							   	$sql = "SELECT * FROM recetas";
								$result = mysqli_query($db,$sql);	
						  
							  while($mostrar = mysqli_fetch_assoc($result)){
								  include('soloRecetas.php');
							  }
						   }
						}
						?>
						
					</div><!--features_items-->
					
					
				</div>
			</div>
		</div>
	</section>
	
	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>