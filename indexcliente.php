<?php
	include_once("controllers/ClientsController.php");
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
            <a class="navbar-brand" href="index.php">Pizzeria el Chilaquil</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
							<?php
							if(isset($_SESSION['nombre'])){
							?>
							<li><a><span class='glyphicon glyphicon-user'></span>Hola <?php echo  $_SESSION['nombre']?></a></li>
							<li><a href="cerrar.php">Cerrar sesion</a></li>
							<?php
							}else{
							 ?>
							  <li><a data-toggle='modal' data-target="#ModalRegistro">Registrar usuario</a></li>
							 <?php
						 		}
							  ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
			<style media="screen">
				label,h2,th,tr{
					color: white;
				}
			</style>
    </header>
		<div class="video-container">
			<video class="video" src="./public/video.mp4" autoplay loop="">
			</video>
		</div>

    <!-- INICIO -->
		<div class="row">
		<div class="vertical-center">
			<div class="col-md-3">
			</div>
		<div  class="card col-md-6">
			<!--Collapse-->
	<center>
		<?php
		if(empty($_SESSION['nombre'])){
		?>
		<h2>Estas dentro de nuestro sitio web, comenzara ordenar
			tu pedido a domicio solo ingresa tus datos despues de iniciar sesion
		  ingresando tu nombre y numero de telefono.</h2>
			<br>
			<label>Nombre:</label>
			<input type="text" id="usu">
			<label>Numero de telefono:</label>
			<input type="text"id="ntel">
			<br>
			<br>
			<button type="button" class="btn btn-info"  id="inicio"><a>Iniciar sesion</a></button>
			<?php
		}else{
			 ?>
			 <br>
			 <h2>Hola <?php echo  $_SESSION['nombre']?> ¿Que deseas ordenar para comer?</h2>
			<br>
			<br>
  		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" aling="center" id="CrearPedido">Crear pedido</button>
			<input type="number" id="npedido" name="primero" style="visibility:hidden">
			<input type="number" id="ncli" value="<?PHP echo $_SESSION['id']?>" style="visibility:hidden">
			<br>
			<br>

			<?php
			}
	 		?>
	</center>
  <div id="demo" class="collapse">
		<br>
		<button type="button" class="btn btn-info" onclick="cerrarp()" >cerrar Pedido</button>
		<button data-toggle='modal' data-target="#myModal2" class="btn btn-danger"><span
			class="glyphicon glyphicon-shopping-cart">  Ver Carrito</span></button>
		<br>
		<br>
		<table class="table table-bordered">
			<tr>
				<th>Nombre</th>
				<th>Categoria</th>
				<th>Precio</th>
				<th>Descripción</th>
				<th>Cantidad</th>
			</tr>
		<?php
			foreach($productos as $producto){
		?>
		<tr>
			<td><?php echo $producto['id'] ?></td>
			<td><?php echo $producto['nombre'] ?></td>
			<td><?php echo $producto['precio'] ?></td>
			<?php
			switch($producto['categoria_id']){
				case 1:
				echo "<td> Pizza </td>";
				break;
				case 2:
				echo "<td> Pasta </td>";
				break;
				case 3:
				echo "<td> Ensalada </td>";
				break;
				case 4:
				echo "<td> Bebida </td>";
				break;
			}
			?>
			<td><?php echo $producto['descripcion'] ?></td>
			<td><input type="number" name="cantidad" value="0" placeholder="Cantidad" id="can"
				onchange="document.getElementById('can').value=this.value" style="background-color: black"></td>
			<td><button class='btn-success' id='agregar' onclick="agregar(<?php echo $producto['id'] ?>)"
				>Agregar</button></td>
		</tr>
		<?php
			}
		 ?>
	 </table>
  </div>

	<div id="myModal2" class=" modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class ="modal-title">Tu Pedido</h4>
				</div>
				<div class=" modal-body">
					<div id="contenido">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

			 <!--Modal-->
			<div id="ModalRegistro" class=" modal fade" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class ="modal-title">Registrar Cliente</h4>
			      </div>
			      <div class=" modal-body">
			        <input type="text" class="form-control" id="nombre" value="" placeholder="Nombre del cliente"><br>
			        <input type="tel" class="form-control" id="telefono" value="" placeholder="7770001234"><br>
							<textarea class="form-control" id="direccion"></textarea>
							<br>
			        <button type="button" class="form-control btn btn-primary" id="guardar">Guardar cliente</button>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!--<button type="button" class="form-control" id="modificar">Modificar</button> -->
		</div>
		<div class="col-md-3">
		</div>
		</div>
		</div>
    <!-- container -->
    <script src="./assets/js/scriptCliente.js" charset="utf-8"></script>
    <script type="text/javascript">
      let guardar = document.querySelector("#guardar");
      guardar.addEventListener('click',function(){
        let nombre = document.querySelector("#nombre");
				console.log(nombre.value);
				let direccion = document.querySelector("#direccion");
				let telefono = document.querySelector("#telefono");
        let cliente = new Cliente(nombre.value,direccion.value,telefono.value);
				let listaclientes = new Array();
				listaclientes.push(cliente);
				let arregloJSON = JSON.stringify(listaclientes);
				$.ajax({
				  method: "POST",
				  url: "controllers/ClientsController.php",
				  data: { clientes: arregloJSON, funcion: "insertarClientes" }
				})
				.done(function($c) {
				   console.log( $c);
				 });
      });
    </script>
		<script src="./assets/js/js4.js" charset="utf-8"></script>
		<script type="text/javascript">
		let buscar = document.querySelector("#inicio");
		buscar.addEventListener('click',function(){
			let usuario = document.querySelector("#usu");
			let telefono = document.querySelector('#ntel');
			let pebuscar = new Buscar(usuario.value,telefono.value);
			let listabuscar = new Array();
			listabuscar.push(pebuscar);
			let arregloJSONE = JSON.stringify(listabuscar);
			console.log(arregloJSONE);
			$.ajax({
				method: "POST",
				url: "controllers/ClientsController.php",
				data: { prebuscar: arregloJSONE, buscar: "burcarCliente" }
			})
			.done(function($x) {
				window.location = 'indexcliente.php';
			 });
		});
		</script>

		<script src="./assets/js/script.min.js" charset="utf-8"></script>
		<script src="./assets/js/js5.js" charset="utf-8"></script>
		<script src="./assets/js/js6.js" charset="utf-8"></script>
		<script type="text/javascript">
		var listaproductos3 = new Array();
		var arregloJSONP="";
		function agregar(idpro){
			//let idped = document.querySelector("#npedido");
			let cantidad = document.querySelector('#can');
			let agregarpro = new Agregar(idpro,cantidad.value);
			listaproductos3.push(agregarpro);
		  arregloJSONP = JSON.stringify(listaproductos3);
			cantidad.value="";
			$(".input").val("");
			document.getElementById("contenido").innerHTML ='';
          listaproductos3.forEach(function(item){
						console.log(item._cantidad);
            <?php
              foreach ($productos as $producto) {
              ?>
              if(item._idpro == <?php echo $producto['id']; ?>){
                document.getElementById("contenido").innerHTML += item._cantidad+' '+'<?php echo $producto['nombre'];?> <br>';
              }
            <?php
						}
						?>
					})

		}

		function cerrarp(){
			let id = document.querySelector("#ncli");
			let crear = new Crear(id.value);
			let listacrear = new Array();
			listacrear.push(crear);
			let arregloJSONC = JSON.stringify(listacrear);
			console.log(arregloJSONC);
			$.ajax({
				method: "POST",
				url: "controllers/PedidosController.php",
				data: { crearpedido: arregloJSONC, crear: "crearpedido" }
			})
			.done(function($y) {
				document.getElementById("npedido").value = $y;

				$.ajax({
				 method: "POST",
				 url: "controllers/pro_pedidoController.php",
				 data: { agregarpedido: arregloJSONP, idpedido: $y ,agregar: "agregarpedido" }
			 })
			 .done(function() {
				});

			 });


		}
		</script>
  </body>
</html>
