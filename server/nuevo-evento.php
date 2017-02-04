<?php include("header.php") ?>
<?php include("menu.php") ?>
<body>  
	<div class="container">

		<div class="row">
			<div class="col-lg-6">
				<a href="index.php">Inicio</a> / <a href="dashboard.php">Lista Eventos</a> / <a href="Dashboard.php" >Nuevo Evento</a>
				<h4><strong>Nuevo Evento</strong></h4>
			</div>
			<div class="col-lg-6 left">

			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 f-gris my-padding">
				
		

			<div class="col-lg-12 f-blanco my-padding my-margin">
				  


				<div class="mybox">
					   
					   <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Fecha">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Imagen de Evento</label>
    <div class="col-sm-4">
       <img class="img-responsive " src="assets/img/video-portada.jpg" alt="">
    </div>

    <div class="col-sm-4">
    	<input type="file" class="filestyle" data-icon="false" data-buttonText="Cargar Fichero">
    </div>
  </div>


   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Final Evento</label>
    <div class="col-sm-4">
       <img class="img-responsive " src="assets/img/video-portada.jpg" alt="">
    </div>

    <div class="col-sm-4">
    	<input type="file" class="filestyle" data-icon="false" data-buttonText="Cargar Fichero">
    </div>
  </div>

<hr>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fan URL</label>
    <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon">http://wwww.ejemplo.cl</span>
  <input type="text" class="form-control" placeholder="Ejemplo" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">CopyURL</span>
</div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fan URL</label>
    <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon">http://wwww.ejemplo.cl</span>
  <input type="text" class="form-control" placeholder="Ejemplo" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">CopyURL</span>
</div>
    </div>
  </div>



    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fan URL</label>
    <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon">http://wwww.ejemplo.cl</span>
  <input type="text" class="form-control" placeholder="Ejemplo" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">CopyURL</span>
</div>
    </div>
  </div>




  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Guardar Evento
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Guardar Evento</button>
   </div>
  </div>


</form>


				</div>

			</div>
			</div>
		</div>

	</div>      

</body>
<?php include("footer.php") ?>
