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
		<title>1.MyTodo - Login</title>
	</head>

	<body class="alinhamento">
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

			</form>
		</div>
	</body>

	<script src="js/erros.js"></script>

</html>