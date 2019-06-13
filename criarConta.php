<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<title>1.MyTodo - Criar conta</title>
	</head>

	<body>
		<div>
			<form method="post" action="control/control.php?action=criarConta">
				<h1>1.MyTodo</h1>

				<p id="erro" class="err">

				<p class="p">
					<label for="nome"><img src="images/user.png"></label>
					<input type="text" name="nome" id="nomeid" class="input" placeholder="Nome de usuário" required="true">
				</p>

				<p class="p">
					<label for="email"><img src="images/email.ico"></label>
					<input type="text" name="email" id="emailid" class="input" placeholder="Email" required="true">
				</p>

				<p class="p">
					<label for="senha"><img src="images/key.png"></label>
					<input type="password" name="senha" id="senhaid" class="input" placeholder="Senha" required="true">
				</p>

				<br/>

				<p>
					<input type="submit" name="salvar" value="SALVAR" class="botao">
				</p>
			</form>
		</div>
	</body>

</html>