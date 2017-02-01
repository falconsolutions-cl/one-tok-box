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

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>

  <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Obtener Código Embebido</a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Obtener Código Fan</a></li>
    <li><a href="#">Obtener Código Host</a></li>
    <li><a href="#">Obtener Celebridad Codigo</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>


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
						<button type="button" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span> Más Recientes</button>
						<button type="button" class="btn btn-default">Fecha de inicio</button>
						<button type="button" class="btn btn-default">Estado del Evento</button>
					</div>
			</div>

			<div class="col-lg-12 f-blanco my-padding my-margin">
				  
				<div class="mybox">
					   <div class="col-lg-8 my-int-box">
						  <p class="text-blue">Evento 4</p>
						  <p>Julio 21 del 2017 - 11:00 am</p>
						  <button type="button" class="btn btn-default btn-default-blue">Creado</button>
						</div>
						<div class="col-lg-4">
						  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Iniciar Evento</button>
						  <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button>
						  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Borrar</button>
						</div>
				</div>

				<div class="mybox">
					   <div class="col-lg-8 my-int-box">
						  <p class="text-blue">Evento 2</p>
						  <p>Julio 21 del 2017 - 11:00 am</p>
						  <button type="button" class="btn btn-default btn-default-naranja">Evento Mostrado</button>
						</div>
						<div class="col-lg-4">
						  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver Evento</button>
						  <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button>
						</div>
				</div>


				<div class="mybox">
					   <div class="col-lg-8 my-int-box">
						  <p class="text-blue">Evento 1</p>
						  <p>Julio 21 del 2017 - 11:00 am</p>
						  <button type="button" class="btn btn-default btn-default-verde">Cerrado</button>
						</div>
						<div class="col-lg-4">
						</div>
				</div>

			</div>
			</div>
		</div>

	</div>      

</body>
<?php include("footer.php") ?>
