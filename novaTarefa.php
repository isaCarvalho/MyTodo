<?php

	include "header.html"
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/pagina.css">
		<title>Nova Tarefa - MyTodo</title>
	</head>

	<body>
		<div class="formulario">

			<form method="post" name="fsalvar" action="control/control.php?action=novaTarefa">
				<p>
					<label for="nome">Nome da Tarefa</label>
					<input type="text" id="nomeid" name="nome" class="inputtxt" placeholder="Nome da tarefa" required="true" />
				</p>

				<p>
					<label for="estado">Estado</label>
					<select type="text" id="estadoid" name="estado" class="select" required="true">
						<option value="1" selected="selected">Feito</option>
						<option value="2">Em andamento</option>
						<option value="3">Stuck</option>
					</select>
				</p>

				<p>
					<label for="inicio">Inicio</label>
					<input type="time" id="incioid" name="inicio" class="inputtime"/>
				</p>

				<p>
					<label for="fim">Término</label>
					<input type="time" id="fimid" name="fim" class="inputtime"/>
				</p>

				<p>
					<label for="data">Data</label>
					<input type="date" id="dataid" name="data" class="inputtime" />
				</p>

				<p id="recorrencia">
					<label for="repetir">Repetir</label>
					<select type="text" id="repetirid" name="repetir" class="select" required="true">
						<option value="1" selected="selected">Nenhuma</option>
						<option value="2">Diariamente</option>
						<option value="3">Semanalmente</option>
						<option value="4">Mensalmente</option>
						<option value="5">Anualmente</option>
						<option value="6">Não especificado</option>
					</select>
				</p>

				<p>
					<input type="submit" name="salvar" value="Salvar" class="inputbutton">

					<input type="button" name="limpar" onclick="" value="Limpar" class="inputbutton">
				</p>
			</form>

		</div>

	</body>

</html>


<?php
	include "footer.html"
?>