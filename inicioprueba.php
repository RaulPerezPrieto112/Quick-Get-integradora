<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location:index.php');
  }

  require 'base_datos.php';
  


  if (!empty($_POST['name']) || !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, name, password FROM users WHERE name = :name');
    $records->bindParam(':name', $_POST['name']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

	$mesage='';

    if ($results && count($results) > 1 && password_verify($_POST['password'], $results['password'])) {
		$_SESSION['user_id'] = $results['id'];
		header ("Location:index.php");
    } else {
        $mesage=' Usuario o contraseña incorrecta';
    }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<style>

		#color{

			background: -webkit-linear-gradient(right, #004581, #97cbdc, #018abd, #004581);
		}

		.alert-danger{

			text-align: center;
		}

	</style>
<!--===============================================================================================-->
</head>
<body>


<div class="login100-form validate-form">
 <div id="color">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">


<br>
					<span class="login100-form-title p-b-49">
						INICIAR SESION
					</span>

                    <form action="inicioprueba.php" method="POST">
                    
						<div class="wrap-input100 validate-input m-b-23" data-validate = "Usuario necesario">
                            <span class="label-input100">Nombre de usuario</span>
                            <input class="input100" name="name" type="text" placeholder="Ingresa el usuario">
                            <span class="focus-input100" data-symbol="&#xf205;"></span>
                        </div>

						<div class="wrap-input100 validate-input" data-validate="Contraseña necesaria">
						<span class="label-input100">Crea tu contraseña</span>
						<input class="input100" name="password" type="password" placeholder="Ingresa la contraseña">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>
<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								INICIAR SESION
							</button>
						</div>
					</div>
                    </form>

					<?php if(!empty($mesage)): ?>
						<br>

				 <div class="alert alert-danger" role="alert"> ><?=$mesage ?></div>

		
					<?php endif; ?>				
					

                    
					
					<div class="flex-col-c p-t-155">
<br>
                        

						<a href="registroprueba.php" class="txt2" style="background-color:white;height:21px" onMouseover="this.style.color='#004581'" onMouseout="this.style.color='gray'" >
							REGISTARSE
						</a>
					</div>
				
			</div>
		</div>
	</div>
</div>
</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>