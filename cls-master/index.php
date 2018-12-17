<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario para datos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
		<div class="container">
			<div class="row mt-3">
				<div class="col-12 text-center">
					<h1>Formulario de ingreso de datos</h1>
				</div>
			</div>
			<form action="index.php" class="directForm" method="post">
				<div class="row mt-2">
					<div class="col-6 text-right">
						Tipo de vivienda:
					</div>
					<div class="col-6">
						<select name="ddlTipo" id="ddlTipo">
							<option value="0">Seleccione uno</option>
							<option value="1">casa</option>
							<option value="2">edificio</option>
						</select>
					</div>
				</div>
				<div id="frmdinamico">
					
				</div>
			</form>
			<?php 
				if (empty($_POST['ddlTipo'])) {
					echo '<h2 class="text-center">Rellene los datos por favor</h2>';
				}else{
					switch ($_POST['ddlTipo']) {
						case '1':
							include 'casa.php';
							$cons =  new casa();
							$cons->setnumCuartos($_POST['txtNumCuartos']);
							$cons->setdireccion($_POST['txtDireccion']);
							$cons->setcolor($_POST['clrColor']);
							$cons->settipoVivienda($_POST['tipoVivienda']);
							$cons->setancho($_POST['txtAncho']);
							$cons->setlargo($_POST['txtLargo']);
							?>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Número de cuartos: <?php echo $cons->getnumCuartos(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Dirección: <?php echo $cons->getdireccion(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Color: <?php echo $cons->getcolor(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Tipo de vivienda: <?php echo $cons->gettipoVivienda(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Area: <?php echo $cons->obtenerarea(); ?>
								</div>
							</div>
							<?php
							break;
						case '2':
							include 'edificio.php';
							$cons = new edificio();
							$cons->setnumPisos($_POST['txtNumPisos']);
							$cons->setdireccion($_POST['txtDireccion']);
							$cons->setnombre($_POST['txtNombre']);
							$cons->settipoVivienda($_POST['tipoVivienda']);
							$cons->setancho($_POST['txtAncho']);
							$cons->setlargo($_POST['txtLargo']);
							?>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Número de pisos: <?php echo $cons->getnumPisos(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Dirección: <?php echo $cons->getdireccion(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Nombre: <?php echo $cons->getnombre(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Tipo de vivienda: <?php echo $cons->gettipoVivienda(); ?>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-12 text-center">
									Area: <?php echo $cons->obtenerarea(); ?>
								</div>
							</div>
							<?php
							break;
					}
				}

			 ?>
		</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script>
        	$(function() {
				$('#ddlTipo').change(function() {
					switch($('#ddlTipo').val()){
						case "1":
							<?php include 'views/frmcasa.php'; ?>
							$('#frmdinamico').html('<?php echo $frm; ?>');
							break;
						case "2":
							<?php include 'views/frmedificio.php'; ?>
							$('#frmdinamico').html('<?php echo $frm; ?>');
							break;
						default:
							$('#frmdinamico').html('<h2 class="text-center">Seleccione un tipo valido</h2>');
							break;
					}
				});
			});
        </script>
    </body>
</html>