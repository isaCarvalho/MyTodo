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

		<script src="js/facebook.js"></script>

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
					<fb:login-button scope="public_profile,email" onlogin="checkLoginState()"; style="width:350px;height:60px;font-size: 18px;font-style: bold;font-family: 'Acme', sans-serif;">
					</fb:login-button>
				</p>

			</form>
		</div>
	</body>

	<script src="js/erros.js"></script>
	

</html>