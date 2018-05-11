<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CH-Project-Login</title>

	<!-- CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css")?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css")?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css")?>">
	<script src="<?php echo base_url("assets/js/jquery-1.11.1.js")?>" charset="utf-8"></script>
	<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.js")?>" charset="utf-8"></script>
	<script src="<?php echo base_url("assets/js/validator.js")?>">

	</script>

</head>

<body>
	<!-- Top content -->
	<div class="top-content"> <!--1-->

			<div class="inner-bg"> <!--2-->

					<div class="container"> <!--3-->

							<h1>Coin Hive</h1>

							<div class="row"><!--4-->


									<div class="col-sm-5 col-sm-offset-3"> <!--5-->

										<div class="form-box"> <!--7-->
											<div class="form-top"> <!--8-->
												<div class="form-top-left"> <!--9-->

													<h3>Recuperar contraseña</h3>
														<p>Ingrese el correo electronico:</p>

												</div> <!--9-->
											</div> <!--8-->
												<div class="form-bottom"> <!--10-->
											<form role="form" action="" method="post" class="login-form" id="formulario-contacto">
												<div class="form-group"> <!--11-->
													<label class="sr-only" for="form-username">Email</label>
														<input type="text" onkeypress="validar_email()" name="email" placeholder="Email..." class="form-username form-control" id="username">
													</div> <!--11-->
													<button type="input"  class="btn">Ingresar</button>

											</form>
                      <a name = "Registro" href="<?php echo base_url("index.php/login")?>"> Ya tienes cuenta click aqui</a>

											<h2><?php if(isset($mensaje)) echo $mensaje; ?></h2>
											        <?=validation_errors();?><!--mostrar los errores de validación-->

										</div> <!--10-->
									</div> <!--7-->




								</div> <!--5-->
							</div> <!--4-->

					</div> <!--3-->
			</div> <!--2-->

	</div> <!--1-->

</body>
</html>
