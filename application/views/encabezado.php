<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pedidos</title>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">Product Order CRUD</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					
					<li><a href=" <?php echo base_url(); ?>index.php/vender/">Home</a></li>
					<li><a href=" <?php echo base_url(); ?>index.php/productos/">Productos</a></li>
					<li><a href=" <?php echo base_url(); ?>index.php/ventas/">Pedidos</a></li>
					<li><a href=" <?php echo base_url(); ?>index.php/personas/">Clientes</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">