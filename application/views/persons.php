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

			<div class="col-6" id="content_form">

				<?php echo form_open('person/create','id=form') ?>

				<input class="form-control" type="text" name="first_name" id="first_name" placeholder="Ej.Jonathan">
				<br>

				<input class="form-control" type="text" name="last_name" id="last_name" placeholder="Ej.Castro">
				<br>

				<select class="form-control" name="sex" id="sex">
					<option>Ej.Hombre</option>				
				</select>
				<br>

				<select class="form-control" name="country_id" id="country_id">
					<option>Ej.Venezuela</option>				
				</select>

				<br>

				<button class="btn btn-primary" type="submit">enviar</button>

				<?php echo form_close() ?>

			</div>

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

		const base_url = '<?php echo base_url() ?>';

		// alert(base_url);

		// los selectores
		const first_name = $('#first_name');

		const last_name = $('#last_name');

		const sex = $('#sex');

		const country_id = $('#country_id');

		
		


		// cargar paises con ajax
		$.ajax({
			url: base_url + 'person/getCountrys'			
		})
		.done(function(response) {
			// console.log("success");

			// console.log(response);

			countrys = JSON.parse(response);

			// console.log(countrys);

			$.each(countrys, function(index, val) {

				country_id.append('<option value="'+ val.id + '">' + val.country + '</option>');

				// console.log(index);

			});

		})
		.fail(function() {
			// console.log("error");

			country_id.append('<option>Error al cargar paises </option>');

		});


		// cargar sexo con ajax
		$.ajax({
			url: base_url + 'person/getSex'			
		})
		.done(function(response) {
			// console.log("success");

			// console.log(response);

			resp_sex = JSON.parse(response);

			// console.log(resp_sex);

			$.each(resp_sex, function(index, val) {

				sex.append('<option value="'+ val + '">' + val + '</option>');

				// console.log(index);

			});

		})
		.fail(function() {
			// console.log("error");

			sex.append('<option>Error al cargar sexo </option>');			 

		});

		

		const form = $('#form');

		const content_form = $('#content_form');

		content_form.hide();

		$('#add_person').click(function() {
			

			content_form.toggle();			
			
		});

		// alert(content_form);

		// console.log(content_form);

		form.submit(function(event) {
			event.preventDefault();

			//obtenemos los valores por el selector id
			fName = first_name.val();
			lName = last_name.val();
			dSex = sex.val();
			dCoun = country_id.val();




			$.post(base_url + 'person/create', {
				first_name:fName,
				last_name:lName,
				sex:dSex,
				country_id:dCoun
			}, function(data, textStatus, xhr) {

				// console.log("success");

				console.log(data);
				
			});

		});






	</script>
	
</body>
</html>