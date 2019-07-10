<?php
	include "header.html";
?>

<head>
	<title>1.MyTodo - Ajuda</title>
</head>

<body>

	<div class="texto">
		<h1>Bem vindo ao 1.MyTodo!</h1>

		<p>Este site foi pensado para você que necessita de um organizador de tarefas intuitivo 
		e que tornará a sua vida mais rápida e prática.</p>

		<p>Se você estiver interessado em conhecer mais sobre o 1.MyTodo ou tiver alguma dúvida sobre seu funcionamento, é só continuar lendo!</p>

		<h2>Layout da página</h2>

		<p>O layout do 1.MyTodo foi pensado para ser prático e intuitivo. As tarefas do dia a cumprir ficam na cor rosa, enquanto as demais, ficam na cor cinza. A tarefa é marcada como feita no momento em que cumpre o seu horário final.
		
		<p>*Tarefas excluidas e cumpridas não apareceram nas tabelas.</p>

		<h2>Nova Tarefa</h2>

		<p>Nesta opção, aparecerá um formulário para ser preenchido com as informações da sua tarefa. Todos os campos são obrigatórios. É possivel marcar recorrencias.</p>

		<p>Após preenchido o formulário, clique no botão salvar. A sua nova tarefa aparecerá na tabela de tarefas da página inicial.</p>

		<p>Caso algum campo tenha sido preenchido incorretamente, você pode clicar no botão "Limpar campos" ao lado do botão "Salvar". Para voltar para a página inicial, é só clicar em "Home" no menu.</p>

		<h2>API</h2>

		<p>Caso queira utilizar o serviço de API do 1.MyTodo use:</p>

		<p>Para um usuario especifico: https://mytod0.herokuapp.com/control/control.php?action=api&tarefas=NOMEDOUSUARIO
			*Substitua o NOMEDEUSUARIO pelo nome do usuário que será buscado.
		</p>
		
		<p>Para todas as tarefas: https://mytod0.herokuapp.com/control/control.php?action=api&tarefas=*</p>

	</div>
</body>

<?php
	include "footer.html";
?>