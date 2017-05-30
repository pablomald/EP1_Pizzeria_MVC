<?php
	include_once("controllers/ProductsController.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pizza</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- my css file -->
    <link rel="stylesheet" href="./assets/css/style.css">
		<style media="screen">
			td,tr{
				color: white;
			}
		</style>
  </head>
  <body>
    <!-- header -->
    <header>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pizzeria el Chilaquil</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="indexcliente.php">Realizar Pedido</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <div class="video-container">
      <video class="video" src="./public/video.mp4" autoplay loop="">
      </video>
    </div>
		<!--Formulario para mostrar los productos registrados-->
		<!---->
		<div class="row">
		<div class="vertical-center">
			<div class="col-md-2">
			</div>
		<div  class="card col-md-8">
				<table class="table table-bordered">
					<tr>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Categoria</th>
						<th>Descripción</th>
					</tr>
				<?php
					foreach($productos as $producto){
				?>
				<tr>
					<td><?php echo $producto['nombre'] ?></td>
					<td><?php echo $producto['precio'] ?></td>
					<td><?php echo $producto['categoria_id'] ?></td>
					<td><?php echo $producto['descripcion'] ?></td>
					<td><button class='btn-success' data-toggle='modal' data-target='#myModal' data-id="<?php echo $producto['id'] ?>"
						data-nombre="<?php echo $producto['nombre'] ?>" data-precio="<?php echo $producto['precio'] ?>"
						data-categoria="<?php echo $producto['categoria_id'] ?>" data-descripcion="<?php echo $producto['descripcion'] ?>"
						id='modificar'>Opciones</button></td>
				</tr>
				<?php
					}
				 ?>
			 </table>

			 <!--Modal-->
			<div id="myModal" class=" modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class ="modal-title">Cambio de datos</h4>
			      </div>
			      <div class=" modal-body">
							<input type="number" style="visibility:hidden" id="id2">
							<input type="text" class="form-control" id="nombre2" value="" placeholder="Escribe el nombre del producto "><br>
							<input type="number" class="form-control" id="precio2" value="" placeholder="Escribe el precio del producto "><br>
							<select id="categoria2" class="form-control">
								<option value="1">Pizzas</option>
								<option value="2">Pastas</option>
								<option value="3">Ensaladas</option>
								<option value="4">Bebidas</option>
							</select><br>
							<textarea class="form-control" id="descripcion2"></textarea>
							<br>
							<button type="button" class="form-control btn btn-success" id="cambio">Guardar cambios</button>
							<button type="button" class="form-control btn btn-danger" id="eliminar">Eliminar producto</button>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!--<button type="button" class="form-control" id="modificar">Modificar</button> -->
		</div>
		<div class="col-md-2">
		</div>
		</div>
		</div>
		<br>
		<br>
    <!-- FORMULARIO PARA INGRESAR PRODUCTOS -->
		<div class="row">
    <div class="vertical-center">
			<div class="col-md-2">
			</div>
      <div class=" card col-md-8">
        <h2 class ="white-text">Registrar nuevo producto</h2>
        <input type="text" class="form-control" id="nombre" value="" placeholder="Escribe el nombre del producto "><br>
        <input type="number" class="form-control" id="precio" value="" placeholder="Escribe el precio del producto "><br>
        <select id="categoria" class="form-control" name="">
					<option value="1">Pizzas</option>
					<option value="2">Pastas</option>
					<option value="3">Ensaladas</option>
        	<option value="4">Bebidas</option>
        </select><br>
				<textarea class="form-control" id="descripcion"></textarea>
				<br>
        <button type="button" class="form-control" id="guardar">Guardar producto</button>
      </div>
			<div class="col-md-2">
			</div>
    </div>
		</div>
		<br>
		<br>

    <!-- container -->
    <script src="./assets/js/script.js" charset="utf-8"></script>
    <script type="text/javascript">
      let guardar = document.querySelector("#guardar");
      guardar.addEventListener('click',function(){
        let nombre = document.querySelector("#nombre");
        let precio = document.querySelector("#precio");
				let categoria = document.querySelector("#categoria");
        let descripcion = document.querySelector("#descripcion");
        let producto = new Producto(nombre.value,precio.value,categoria.value,descripcion.value);
				let listaproductos = new Array();
				listaproductos.push(producto);
				let arregloJSON = JSON.stringify(listaproductos);			
				$.ajax({
				  method: "POST",
				  url: "controllers/ProductsController.php",
				  data: { productos: arregloJSON, funcion: "insertarProductos" }
				})
				.done(function() {
					window.location = 'index.php';
				 });
      });

    </script>

		<!-- Formulario de cambio-->
		<script>
		$('#myModal').on('show.bs.modal', function (event) {
			let button = $(event.relatedTarget)
	 		let recipient0 = button.data('id')
	 		let recipient1 = button.data('nombre')
	 		let recipient2 = button.data('precio')
	 		let recipient3 = button.data('categoria')
	 		let recipient4 = button.data('descripcion')
			//pasamos las variables
			let modal = $(this)
    	modal.find('.modal-body #id2').val(recipient0)
    	modal.find('.modal-body #nombre2').val(recipient1)
    	modal.find('.modal-body #precio2').val(recipient2)
    	modal.find('.modal-body #categoria2').val(recipient3)
    	modal.find('.modal-body #descripcion2').val(recipient4)
			});
		</script>

		<script src="./assets/js/js2.js" charset="utf-8"></script>
    <script type="text/javascript">
		let modificar = document.querySelector("#cambio");
		modificar.addEventListener('click',function(){
			let id = document.querySelector("#id2");
			let nombre = document.querySelector("#nombre2");
			let precio = document.querySelector("#precio2");
			let categoria = document.querySelector("#categoria2");
			let descripcion = document.querySelector("#descripcion2");
			let producto2 = new Producto2(id.value,nombre.value,precio.value,categoria.value,descripcion.value);
			let listaproductos2 = new Array();
			listaproductos2.push(producto2);
			let arregloJSON2 = JSON.stringify(listaproductos2);
			$.ajax({
				method: "POST",
				url: "controllers/ProductsController.php",
				data: { productos2: arregloJSON2, modificar: "modificarProductos" }
			})
			.done(function() {
				 window.location = 'index.php';
			 });
		});
	</script>

	<!--script para eliminar-->

	<script src="./assets/js/js3.js" charset="utf-8"></script>
	<script type="text/javascript">
	let eliminar = document.querySelector("#eliminar");
	eliminar.addEventListener('click',function(){
		let id = document.querySelector("#id2");
		console.log(id.value);
		let peliminar = new Eliminar(id.value);
		let listaeliminar = new Array();
		listaeliminar.push(peliminar);
		let arregloJSONE = JSON.stringify(listaeliminar);
		$.ajax({
			method: "POST",
			url: "controllers/ProductsController.php",
			data: { preliminar: arregloJSONE, eliminar: "eliminarProductos" }
		})
		.done(function() {
			 window.location = 'index.php';
		 });
	});
</script>




  </body>
</html>
