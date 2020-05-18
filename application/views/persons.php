<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>">

	<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous"></script>



<!-- 	<script type="text/javascript" href="<?php //echo base_url('assets/lib/jquery/jquery.min.js') ?>" ></script>
-->

<!--  <script type="text/javascript" href="<?php //echo base_url('assets/js/main.min.js') ?>" ></script>   -->


</head>
<body>

	<nav class="navbar bg-danger">
		<a class="navbar-brand text-light" href="<?php echo base_url() ?>">Persons</a>		
	</nav>

	<div class="container">

		<div class="col-12">

		<!-- 	<h4>Persons</h4> -->

			<a class="btn btn-outline-info" id="add_person">Agregar Persona</a>

			<?php echo form_open() ?>

			<input class="form-control" type="text" name="nombre">
			<br>

			<input class="form-control" type="text" name="apellido">
			<br>

			<input class="form-control" type="number" name="edad">
			<br>
			<button class="btn btn-primary" type="submit">enviar</button>

			<?php echo form_close() ?>

			<div class="content">

			</div>

			

		</div>

	</div>

	<footer class="bg-dark text-center">
		<h5 class="text-light">
			Desarrollado por Jonathan Castro <?php echo date('d-m-y') ?>
		</h5>	
	</footer>


	<script type="text/javascript">
		// alert();

		$('#add_person').click(function(event) {
			
			// alert(event);

			// console.log(event);
		});






	</script>
	
</body>
</html>