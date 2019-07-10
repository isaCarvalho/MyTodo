<?php 
	include "header.html";
?>

<head>
	<title>1.MyTodo - Settings</title>
</head>

<body>

	<div class="formulario">

			<form method="post" id="formulario" name="fsalvar" action="control/control.php?action=atualizarUsuario">
				<p>
					<label for="nome">Nome de Usuario</label>
					<input type="text" id="nomeid" name="nome" class="inputtxt" placeholder="Nome de usuário" required="true" />
				</p>

				<p>
					<label for="Email">Email</label>
					<input type="text" id="emailid" name="email" class="inputtxt" placeholder="Email" required="true" />
					
				</p>

				<p>
					<label for="Email">Confirmar email</label>
					<input type="text" id="cemailid" name="cemail" class="inputtxt" placeholder="Email" required="true" />
					
				</p>

				<p>
					<label for="Senha">Nova senha</label>
					<input type="password" name="senha" id="senhaid" class="inputtxt" required="true"></p>

				</p>

				<p>
					<label for="Senha">Confirmar senha</label>
					<input type="password" name="csenha" id="csenhaid" class="inputtxt" required="true"></p>

				</p>

				<p>
					<input type="submit" name="salvar" value="Salvar" class="inputbutton">

					<input type="button" name="limpar" onclick="limparCampos()" value="Limpar" class="inputbutton">

					<a href="control/control.php?action=excluirUsuario"><input type="button" name="excluir" value="Excluir Conta" class="inputbutton" onclick=""></a>
				</p>

			</form>

		</div>

</body>

<script src="js/limparForm.js"></script>

<?php
	include "footer.html";
?>