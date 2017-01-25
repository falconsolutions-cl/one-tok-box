<?php include("header.php") ?>
<?php include("menu.php") ?>
<body>  
	<div class="container">

		<div class="row">
			<div class="col-lg-6">
				<a href="index.php">Inicio</a> / <a href="Dashboard.php" >Dashboard</a>
				<h4><strong>Dashboard</strong></h4>
			</div>
			<div class="col-lg-6 left">
				<a class="btn btn-default" href="#" role="button">Obtener Código</a>
				<a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar nuevo evento</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 f-gris my-padding">
				
			<div class="col-lg-6">
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-default btn-primary">Todos los Eventos</button>
						<button type="button" class="btn btn-default">Eventos actuales</button>
						<button type="button" class="btn btn-default">Eventos archivados</button>
					</div>
			</div>
			
			<div class="col-lg-6">
					ordenar por:
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-default btn-primary">Más Recientes</button>
						<button type="button" class="btn btn-default">Fecha de inicio</button>
						<button type="button" class="btn btn-default">Estado del Evento</button>
					</div>
			</div>

			<div class="col-lg-12 f-blanco my-padding my-margin">
				  asas
			</div>

			</div>
		</div>

	</div>      

</body>
<?php include("footer.php") ?>
