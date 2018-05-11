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
	<link rel="stylesheet" href="<?php echo base_url("assets/css/form-elements.css")?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css")?>">
	<script src="<?php echo base_url("assets/js/jquery-1.11.1.js")?>" charset="utf-8"></script>
	<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.js")?>" charset="utf-8"></script>

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

													<h3>Login</h3>
														<p>Ingrese el correo y la contraseña:</p>

												</div> <!--9-->
											</div> <!--8-->
												<div class="form-bottom"> <!--10-->
											<form role="form" action="" method="post" class="login-form">
												<div class="form-group"> <!--11-->
													<label class="sr-only" for="form-username">Email</label>
														<input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="username">
													</div> <!--11-->
													<div class="form-group"> <!--12-->
														<label class="sr-only" for="form-password">Contraseña</label>
														<input type="password" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="password">
													</div> <!--12-->
													<button type="submit" class="btn">Ingresar</button>
													<a name = "change_password" href="<?php echo base_url("index.php/Password_recovery")?>"> Se te olvido la contraseña click aqui</a>
											</form>
											<a name = "change_password" href="<?php echo base_url("index.php/register")?>">¿Eres nuevo? click aqui</a>
										</div> <!--10-->
									</div> <!--7-->




								</div> <!--5-->
							</div> <!--4-->

					</div> <!--3-->
			</div> <!--2-->

	</div> <!--1-->

</body>
</html>
