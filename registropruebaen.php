<?php

  require 'base_datos.php';



  if (!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email'])) {
    $sql = "INSERT INTO users (name,password,email) VALUES (:name, :password, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $_POST['email']);

	$mesage='';

    if ($stmt->execute()) {
		$mesage=' Successful registration';
    } 
	else {
		$mesage=' Username or email already exists';
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
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

	<link href="imagnes/logotipo.png" rel="icon">

	<style>

		#color{

			background: -webkit-linear-gradient(right, #004581, #97cbdc, #018abd, #004581);
		}

		.alert-warning{

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

				<div align="center">
					<img src="imagnes/logo.png" alt="No se ha encontrado">
				</div>
<br>
					<span class="login100-form-title p-b-49">
						SIGN UP
					</span>

                    <form action="registropruebaen.php" method="POST">
                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username required">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="name" placeholder="Enter your username">
                            <span class="focus-input100" data-symbol="&#xf205;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter your password">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Email required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter your email">
						<span class="focus-input100" data-symbol="&#x2709;"></span>
					</div>
<br>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign up
							</button>
						</div>
					</div>
                    </form>
<br>
					<?php if(!empty($mesage)): ?>
						<br>

				 		<div class="alert alert-warning" role="alert"> ><?=$mesage ?></div>	
	
					<?php endif; ?>		

                    
					
					<div class="flex-col-c p-t-155">

                        

						<a href="iniciopruebaen.php" class="txt2" style="background-color:white;height:21px" onMouseover="this.style.color='#004581'" onMouseout="this.style.color='gray'" >
							LOGIN
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