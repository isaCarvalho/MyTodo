<?php 

session_start();

if (isset($_SESSION['login']))
{
	header('Location: home.php');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link rel="icon" type="imagem/png" href="/images/logo.png" />
		<title>1.MyTodo - Login</title>
	</head>

	<body class="alinhamento">

		<!-- <div id="fb-root"></div> -->
		<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=1072041326518155&autoLogAppEvents=1"></script> -->

		<div>
			<form onsubmit="errLogin(event)" id="loginid">
				<h1>1.MyTodo</h1>

				<p id="erro" class="err">
					
				</p>

				<p class="p">
					<label for="user"><img src="images/user.png"></label>
					<input type="text" name="user" id="userid" class="input" placeholder="Nome de usuário ou Email" required="true">
				</p>

				<p class="p">
					<label for="senha"><img src="images/key.png"></label>
					<input type="password" name="senha" id="senhaid" class="input" placeholder="Senha" required="true">
				</p>

				<br/>

				<p>
					<input type="submit" name="login" value="LOGIN" class="botao">
				</p>

				<p>
					<a href="criarConta.php"><input type="button" name="cadastrar" value="CRIAR CONTA" class="botao"></a>
				</p>

				<p>
					<!-- <div class="fb-login-button" data-width="350" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="true" onlogin="checkLoginState()">
					</div> -->

					<input type="button" name="fb-login" value="Entrar com facebook" class="botao" style="background-color: #365798;border: 1px solid rgba(54, 87, 152, 0.7);" onclick="checkLoginState()">
				</p>

			</form>
		</div>

		<div id="status">
		</div>

	</body>

	<script src="js/erros.js"></script>
	<script src="js/facebook.js"></script>

</html>